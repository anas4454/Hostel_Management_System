<x-web-component.main>

    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <style>
        .ai-chat-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 65px;
            height: 65px;
            background: linear-gradient(135deg, #ff9800, #ff6f00);
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            cursor: pointer;
            z-index: 99999;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        }

        .chat-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.35);
            display: none;
            z-index: 9998;
        }

        .ai-chat-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 380px;
            height: 700px;
            background: #f5f5f5;
            border-radius: 30px;
            overflow: hidden;
            display: none;
            flex-direction: column;
            z-index: 99999;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        }

        .ai-chat-header {
            background: linear-gradient(180deg, #f39c12, #b85c00);
            padding: 25px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .bot-avatar {
            width: 60px;
            height: 60px;
            background: white;
            color: black;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 15px;
            font-size: 28px;
        }

        .ai-chat-header h5 {
            margin: 0;
            font-size: 20px;
        }

        .ai-chat-header small {
            font-size: 14px;
        }

        .close-chat {
            border: none;
            background: transparent;
            color: white;
            font-size: 18px;
        }

        .ai-chat-body {
            flex: 1;
            padding: 25px;
            overflow-y: auto;
        }

        .welcome-text {
            font-size: 20px;
            line-height: 1.7;
            margin-bottom: 35px;
            color: #222;
        }

        .start-conversation {
            background: white;
            border-radius: 30px;
            padding: 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-bottom: 25px;
        }

        .start-conversation h4 {
            margin: 0;
            font-size: 24px;
        }

        .start-conversation p {
            margin: 0;
            color: #666;
        }

        .start-icon {
            width: 60px;
            height: 60px;
            background: #f39c12;
            border-radius: 50%;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 26px;
        }

        .chat-messages {
            display: flex;
            flex-direction: column;
        }

        .user-msg {
            background: #f39c12;
            color: white;
            padding: 12px 18px;
            border-radius: 15px;
            align-self: flex-end;
            margin-bottom: 12px;
            max-width: 80%;
        }

        .bot-msg {
            background: white;
            padding: 12px 18px;
            border-radius: 15px;
            margin-bottom: 12px;
            max-width: 80%;
        }

        .ai-chat-footer {
            background: white;
            padding: 15px;
            display: flex;
            border-top: 1px solid #ddd;
        }

        .ai-chat-footer input {
            flex: 1;
            border: none;
            outline: none;
            padding: 12px;
            border-radius: 10px;
            background: #f2f2f2;
        }

        .ai-chat-footer button {
            margin-left: 10px;
            border: none;
            background: #f39c12;
            color: white;
            padding: 0 20px;
            border-radius: 10px;
        }

        @media(max-width:500px) {

            .ai-chat-container {
                width: 95%;
                right: 2.5%;
                height: 90vh;
                bottom: 10px;
            }

        }
    </style>
    <div>
        <section class="hero">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Left Content -->
                    <div class="col-lg-6">

                        <span class="badge bg-light text-success mb-3 px-3 py-2">
                            Comfortable Stays
                        </span>

                        <h1 class="hero-title">
                            Student <br>
                            <span>Accommodation</span>
                        </h1>

                        <p class="hero-text">
                            Find safe, comfortable and affordable hostels near your university.
                        </p>


                        <!-- Features -->
                        <div class="features mt-4">
                            <span>✔ Verified Hostels</span>
                            <span>✔ 24/7 Support</span>
                            <span>✔ Easy Booking</span>
                            <span>✔ Secure Payments</span>
                        </div>

                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-6 text-center mt-4 mt-lg-0">
                        <div class="image-box">
                            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85" class="img-fluid">
                        </div>
                    </div>

                </div>

                <!-- Stats -->
                <div class="stats shadow">
                    <div>50+ <small>Accommodations</small></div>
                    <div>10+ <small>Universities</small></div>
                    <div>300+ <small>Cities</small></div>
                    <div>10K+ <small>Happy Students</small></div>
                </div>

            </div>
        </section>

        <section class="why-section py-5">
            <div class="container">

                <!-- Top Row -->
                <div class="row align-items-center mb-5">

                    <!-- Left Text -->
                    <div class="col-lg-4">
                        <p class="section-tag">WHY CHOOSE US</p>
                        <h2 class="section-title">
                            Designed for Students,<br>
                            Focused on <span>Comfort</span>
                        </h2>
                        <p class="section-desc">
                            We ensure a hassle-free and safe stay so you can focus on what truly matters — your
                            education and future.
                        </p>
                    </div>

                    <!-- Right Cards -->
                    <div class="col-lg-8">
                        <div class="row g-4">

                            <div class="col-md-6 col-lg-3">
                                <div class="feature-card">
                                    <div class="icon">🛡️</div>
                                    <h6>Safe & Secure</h6>
                                    <p>Your safety is our top priority with 24/7 security and verified hostels.</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="feature-card">
                                    <div class="icon">💰</div>
                                    <h6>Affordable Prices</h6>
                                    <p>Best accommodation options at budget-friendly prices.</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="feature-card">
                                    <div class="icon">✔️</div>
                                    <h6>Verified Hostels</h6>
                                    <p>All hostels are verified for your peace of mind.</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="feature-card">
                                    <div class="icon">🎧</div>
                                    <h6>24/7 Support</h6>
                                    <p>Our support team is always here to help you anytime.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Bottom Row -->
                <div class="row g-4 align-items-stretch">

                    <!-- Left Content -->
                    <div class="col-lg-5">
                        <div class="about-box h-100">

                            <p class="section-tag">ABOUT Hostel Stay</p>

                            <h3 class="about-title">
                                Your Home Away<br>From Home
                            </h3>

                            <p class="about-text">
                                We are dedicated to helping students find the perfect accommodation that is safe,
                                comfortable, and convenient.
                                Our platform connects students with verified hostels near their universities.
                            </p>

                            <ul class="about-list">
                                <li>Wide range of verified hostels</li>
                                <li>Easy booking in just a few clicks</li>
                                <li>Trusted by thousands of students</li>
                                <li>Great locations near universities</li>
                            </ul>

                            <a href="{{ route('about') }}" class="btn btn-success mt-3 decoration-none">
                                Know More About Us →
                            </a>

                        </div>
                    </div>

                    <!-- Right Image -->
                    <div class="col-lg-7">
                        <div class="image-wrapper">
                            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac" class="img-fluid">

                            <!-- Overlay -->
                            <div class="overlay-box">
                                <div><span>🏢</span> Modern Amenities</div>
                                <div><span>🌿</span> Peaceful Environment</div>
                                <div><span>🧼</span> Hygienic Rooms</div>
                                <div><span>📍</span> Prime Locations</div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="steps-section py-5">
            <div class="container">


                <!-- TESTIMONIALS -->
                <div class="mb-5">
                    <p class="section-tag">TESTIMONIALS</p>
                    <h3 class="section-title mb-4">What Students Say About Us</h3>

                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <p class="quote">Hostel Stay made finding a hostel so easy! The process was smooth and
                                    the place I found is amazing.”</p>
                                <div class="user">
                                    <img src="https://randomuser.me/api/portraits/women/1.jpg">
                                    <div>
                                        <h6>Ananya Sharma</h6>
                                        <small>Delhi University</small>
                                    </div>
                                </div>
                                <div class="stars">★★★★★</div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <p class="quote">“Great platform with verified hostels. I felt safe and comfortable
                                    from day one.”</p>
                                <div class="user">
                                    <img src="https://randomuser.me/api/portraits/men/2.jpg">
                                    <div>
                                        <h6>Rohit Mehta</h6>
                                        <small>IIT Bombay</small>
                                    </div>
                                </div>
                                <div class="stars">★★★★★</div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <p class="quote">“Excellent support team! They helped me throughout the booking
                                    process.”</p>
                                <div class="user">
                                    <img src="https://randomuser.me/api/portraits/women/3.jpg">
                                    <div>
                                        <h6>Sneha Iyer</h6>
                                        <small>Christ University</small>
                                    </div>
                                </div>
                                <div class="stars">★★★★★</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- BLOG -->
                <div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <p class="section-tag">LATEST FROM BLOG</p>
                            <h3 class="section-title">Tips, News & Guides</h3>
                        </div>

                    </div>

                    <div class="row g-4">

                        <div class="col-md-4">
                            <div class="blog-card">
                                <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85">
                                <div class="blog-content">
                                    <span class="date">12 May</span>
                                    <h6>How to Choose the Right Hostel</h6>
                                    <p>A complete guide to help you choose the best hostel for your stay.</p>
                                    <a href="{{ route('work') }}">Read More →</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="blog-card">
                                <img src="https://images.unsplash.com/photo-1562774053-701939374585">
                                <div class="blog-content">
                                    <span class="date">08 May</span>
                                    <h6>Top 10 Student-Friendly Cities in Pakistan</h6>
                                    <p>Discover the best cities for students to live and study.</p>
                                    <a href="{{ route('work') }}">Read More →</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="blog-card">
                                <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac">
                                <div class="blog-content">
                                    <span class="date">03 May</span>
                                    <h6>Hostel Life: Making the Most of It</h6>
                                    <p>Tips and tricks to enjoy your hostel life and make lifelong memories.</p>
                                    <a href="{{ route('work') }}">Read More →</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>


    <!-- AI Chatbot Button -->

    <div class="ai-chat-btn" id="openChatbot">
        💬
    </div>

    <!-- Overlay -->
    <div class="chat-overlay" id="chatOverlay"></div>

    <!-- Chatbot -->
    <div class="ai-chat-container" id="aiChatContainer">

        <!-- Header -->
        <div class="ai-chat-header">

            <div class="d-flex align-items-center">

                <div class="bot-avatar">
                    🤖
                </div>

                <div>
                    <h5>Hostel AI Assistant</h5>

                </div>

            </div>

            <button class="close-chat" id="closeChatbot">
                ✖
            </button>

        </div>

        <!-- Body -->
        <div class="ai-chat-body">

            <div class="welcome-text">
                Hello 👋 <br>
                Welcome to Hostel AI Assistant. <br>
                How can I help you today?
            </div>

            <!-- Start Conversation -->
            <div class="start-conversation" id="startConversation">

                <div>
                    <h4>Start Conversation</h4>
                    <p>Send us a message</p>
                </div>

                <div class="start-icon">
                    ➜
                </div>

            </div>

            <!-- Messages -->
            <div class="chat-messages" id="chatMessages"></div>

        </div>

        <!-- Footer -->
        <div class="ai-chat-footer">

            <input type="text" id="chatInput" placeholder="Type your message...">

            <button id="sendBtn">
                Send
            </button>

        </div>

    </div>

    <script>
        const openChatbot = document.getElementById('openChatbot');
        const closeChatbot = document.getElementById('closeChatbot');
        const aiChatContainer = document.getElementById('aiChatContainer');
        const chatOverlay = document.getElementById('chatOverlay');

        const sendBtn = document.getElementById('sendBtn');
        const chatInput = document.getElementById('chatInput');
        const chatMessages = document.getElementById('chatMessages');

        openChatbot.addEventListener('click', () => {

            aiChatContainer.style.display = 'flex';
            chatOverlay.style.display = 'block';

        });

        closeChatbot.addEventListener('click', closeChat);

        chatOverlay.addEventListener('click', closeChat);

        function closeChat() {

            aiChatContainer.style.display = 'none';
            chatOverlay.style.display = 'none';

        }

        sendBtn.addEventListener('click', sendMessage);

        chatInput.addEventListener('keypress', function(e) {

            if (e.key === 'Enter') {
                sendMessage();
            }

        });

        async function sendMessage() {

            let message = chatInput.value;

            if (message.trim() === '') return;

            /**
             * USER MESSAGE
             */
            let userDiv =
                document.createElement('div');

            userDiv.classList.add(
                'user-msg'
            );

            userDiv.innerText = message;

            chatMessages.appendChild(
                userDiv
            );

            /**
             * CLEAR INPUT
             */
            chatInput.value = '';

            /**
             * AUTO SCROLL
             */
            chatMessages.scrollTop =
                chatMessages.scrollHeight;

            /**
             * LOADING MESSAGE
             */
            let loadingDiv =
                document.createElement('div');

            loadingDiv.classList.add(
                'bot-msg'
            );

            loadingDiv.innerText =
                'Typing...';

            chatMessages.appendChild(
                loadingDiv
            );

            try {

                /**
                 * SEND TO LARAVEL
                 */
                let response = await fetch(

                    '/ask-ai',

                    {
                        method: 'POST',

                        headers: {

                            'Content-Type': 'application/json',

                            'X-CSRF-TOKEN': document.querySelector(
                                'meta[name="csrf-token"]'
                            ).content,
                        },

                        body: JSON.stringify({

                            message: message
                        }),
                    }
                );

                if (!response.ok) {

                    throw new Error(
                        'HTTP error ' +
                        response.status
                    );
                }

                let data =
                    await response.json();

                /**
                 * REMOVE LOADING
                 */
                loadingDiv.remove();

                /**
                 * BOT REPLY
                 */
                let botDiv =
                    document.createElement('div');

                botDiv.classList.add(
                    'bot-msg'
                );

                botDiv.innerText =
                    data.reply;

                chatMessages.appendChild(
                    botDiv
                );

                /**
                 * AUTO SCROLL
                 */
                chatMessages.scrollTop =
                    chatMessages.scrollHeight;

            } catch (error) {

                loadingDiv.remove();

                let errorDiv =
                    document.createElement('div');

                errorDiv.classList.add(
                    'bot-msg'
                );

                errorDiv.innerText =
                    'Server Error';
                console.log(error);

                chatMessages.appendChild(
                    errorDiv
                );
            }
        }
    </script>
</x-web-component.main>
