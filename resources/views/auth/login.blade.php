<x-auth-component.main>

    <div class="auth-card ">

        <x-auth-session-status class="mb-3" :status="session('status')" />

        <h4 class="auth-title">Login to Your Account</h4>
        <p class="auth-sub">Enter your credentials to continue</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <label for="email" class="emails">Email Address</label>
            <div class="mb-3 input-group-custom">
                <input type="email" name="email" value="{{ old('email') }}" required class="input-field"
                    placeholder="Email Address">
            </div>

            <!-- Password -->
            <label for="password" class="emails">Password</label>
            <div class="mb-3 input-group-custom">
                <input type="password" name="password" required class="input-field" placeholder="Password">
            </div>
            <div class="mb-3">
                <label for="user_role" class="emails">Login As</label>
                <select id="user_role" name="role" class="input-field" required>
                    <option value="">Select role</option>
                    <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Student
                    </option>
                    <option value="parent" {{ old('role') == 'parent' ? 'selected' : '' }}>Parent</option>
                    <option value="warden" {{ old('role') == 'warden' ? 'selected' : '' }}>Warden</option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                </select>
            </div>
            @error('role')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <!-- Options -->
            <div class="d-flex justify-content-between align-items-center mb-2 mt-2 emails">
                <label><input type="checkbox" name="remember"> Remember</label>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-success small">
                        Forgot Password?
                    </a>
                @endif
            </div>

            <button type="submit" class="login-btn">
                Login →
            </button>



        </form>

    </div>

</x-auth-component.main>
