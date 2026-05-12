<x-student-component.main>

    <div class="container-fluid p-4">

        <div class="card-box p-4">

            <h4 class="mb-4">

                Edit Profile

            </h4>

            {{-- SUCCESS MESSAGE --}}
            @if (session('success'))
                <div class="alert alert-success">

                    {{ session('success') }}

                </div>
            @endif

            {{-- VALIDATION ERRORS --}}
            @if ($errors->any())

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        @foreach ($errors->all() as $error)
                            <li>

                                {{ $error }}

                            </li>
                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="{{ route('student.update-profile') }}" method="POST">

                @csrf

                <div class="row g-3">

                    {{-- NAME --}}
                    <div class="col-md-6">

                        <label class="form-label">

                            Name

                        </label>

                        <input type="text" name="name" class="form-control"
                            value="{{ old('name', $student->name) }}">

                    </div>

                    {{-- EMAIL --}}
                    <div class="col-md-6">

                        <label class="form-label">
                            Email
                        </label>

                        <input type="email" name="email" class="form-control"
                            value="{{ old('email', $student->email) }}">

                    </div>

                    {{-- PHONE --}}
                    <div class="col-md-6">

                        <label class="form-label">

                            Phone

                        </label>

                        <input type="text" name="phone" class="form-control"
                            value="{{ old('phone', optional($student->studentProfile)->phone) }}">

                    </div>

                    {{-- ROLL NUMBER --}}
                    <div class="col-md-6">

                        <label class="form-label">

                            Roll Number

                        </label>

                        <input type="text" name="roll_number" class="form-control"
                            value="{{ old('roll_number', optional($student->studentProfile)->roll_number) }}">

                    </div>

                    {{-- BUTTON --}}
                    <div class="col-12">

                        <button type="submit" class="btn btn-success">

                            Update Profile

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</x-student-component.main>
