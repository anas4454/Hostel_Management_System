<x-parent-component.main>

    <div class="container-fluid p-4">

        {{-- TOP CARDS --}}
        <div class="row g-4 mb-4">

            {{-- STUDENT --}}
            <div class="col-md-3">

                <div class="card-box text-center">

                    <div class="circle mx-auto">

                        {{ $student->user->name ?? 'N/A' }}

                    </div>

                    <h6 class="mt-3">

                        Student Name

                    </h6>

                </div>

            </div>

            {{-- ROOM --}}
            <div class="col-md-3">

                <div class="card-box text-center">

                    <div class="circle mx-auto">

                        {{ $approvedRoom?->room?->room_number ?? 'N/A' }}

                    </div>

                    <h6 class="mt-3">

                        Approved Room

                    </h6>

                </div>

            </div>

            {{-- FEE --}}
            <div class="col-md-3">

                <div class="card-box text-center">

                    <div class="circle mx-auto">

                        {{ $latestFee->status ?? 'Unpaid' }}

                    </div>

                    <h6 class="mt-3">

                        Fee Status

                    </h6>

                </div>

            </div>

            {{-- LEAVES --}}
            <div class="col-md-3">

                <div class="card-box text-center">

                    <div class="circle mx-auto">

                        {{ $pendingLeaves }}

                    </div>

                    <h6 class="mt-3">

                        Leaves

                    </h6>

                </div>

            </div>

        </div>

        {{-- STUDENT DETAILS --}}
        <div class="card-box mb-4">

            <h5 class="mb-3">

                Student Information

            </h5>

            <div class="row">

                <div class="col-md-6">

                    <p>

                        <strong>Name:</strong>

                        {{ $student->user->name ?? 'N/A' }}

                    </p>

                    <p>

                        <strong>Email:</strong>

                        {{ $student->user->email ?? 'N/A' }}

                    </p>

                    <p>

                        <strong>Roll Number:</strong>

                        {{ $student->roll_number ?? 'N/A' }}

                    </p>

                </div>

                <div class="col-md-6">

                    <p>

                        <strong>Phone:</strong>

                        {{ $student->phone ?? 'N/A' }}

                    </p>

                    <p>

                        <strong>Room:</strong>

                        {{ $approvedRoom?->room?->room_number ?? 'N/A' }}

                    </p>



                </div>

            </div>

        </div>

        {{-- RECENT ACTIVITY --}}
        <div class="card-box mb-4">

            <h5>

                Recent Activity

            </h5>

            <ul class="list">

                <li>

                    Latest Fee Status:
                    {{ $latestFee->status ?? 'N/A' }}

                </li>


                <li>

                    Approved Room:
                    {{ $approvedRoom?->room?->room_number ?? 'N/A' }}

                </li>

            </ul>

        </div>

    </div>

</x-parent-component.main>
