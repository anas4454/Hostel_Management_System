<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function askAI(Request $request)
    {
        try {

            $request->validate([

                'message' =>
                    'required|string',
            ]);

            $response = Http::withHeaders([

                'Authorization' =>

                    'Bearer '
                    . env('GROQ_API_KEY'),

                'Content-Type' =>
                    'application/json',

            ])->post(

                'https://api.groq.com/openai/v1/chat/completions',

                [

                    'model' =>

                        'llama-3.1-8b-instant',

                    'messages' => [

                        [

                            'role' =>
                                'system',

                            'content' =>

                                'You are a hostel AI assistant.',
                        ],

                        [

                            'role' =>
                                'user',

                            'content' =>
                                $request->message,
                        ],
                    ],
                ]
            );

            $data = $response->json();

            $reply =

                $data['choices'][0]
                ['message']['content']

                ??

                'No AI response found.';

            return response()->json([

                'reply' => $reply,
            ]);

        } catch (\Exception $e) {

            return response()->json([

                'reply' =>
                    $e->getMessage(),
            ]);
        }
    }
}
