<x-auth-component.main>
    <div class="auth-card">
        <h4 class="auth-title">Register</h4>
        <p class="auth-sub">Create your account to get started</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <label for="name" class="emails">Name</label>
            <div class="mb-3 input-group-custom">
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    autocomplete="name" class="input-field" placeholder="Name">
            </div>
            @error('name')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <!-- Email Address -->
            <label for="email" class="emails">Email Address</label>
            <div class="mb-3 input-group-custom">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    autocomplete="username" class="input-field" placeholder="Email Address">
            </div>
            @error('email')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <!-- Password -->
            <label for="password" class="emails">Password</label>
            <div class="mb-3 input-group-custom">
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    class="input-field" placeholder="Password">
            </div>
            @error('password')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <!-- Confirm Password -->
            <label for="password_confirmation" class="emails">Confirm Password</label>
            <div class="mb-3 input-group-custom">
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password" class="input-field" placeholder="Confirm Password">
            </div>
            @error('password_confirmation')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

             <!-- Role -->
                <label for="user_role" class="emails">Register As</label>
                <div class="mb-3 input-group-custom">
                    <select id="user_role" name="role" class="input-field" required>
                        <option value="">Select role</option>
                        <option value="student" {{ old('role') == 'student' ? 'selected' : '' }}>Student</option>
                        <option value="parent" {{ old('role') == 'parent' ? 'selected' : '' }}>Parent</option>
                         </select>
                </div>
                @error('role')
                    <div class="text-danger small mb-2">{{ $message }}</div>
                @enderror



            <div class="d-flex justify-content-between align-items-center mt-3">
                <a href="{{ route('login') }}" class="text-success small">Already registered?</a>
                <button type="submit" class="login-btn">
                    Register
                </button>
            </div>
        </form>
    </div>
</x-auth-component.main>
