<x-auth-component.main>
    <div class="auth-card">
        <h4 class="auth-title">Reset Password</h4>
        <p class="auth-sub">Enter your email and new password</p>

        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <label for="email" class="emails">Email Address</label>
            <div class="mb-3 input-group-custom">
                <input id="email" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus class="input-field" placeholder="Email Address">
            </div>
            @error('email')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <!-- Password -->
            <label for="password" class="emails">Password</label>
            <div class="mb-3 input-group-custom">
                <input id="password" type="password" name="password" required autocomplete="new-password" class="input-field" placeholder="Password">
            </div>
            @error('password')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <!-- Confirm Password -->
            <label for="password_confirmation" class="emails">Confirm Password</label>
            <div class="mb-3 input-group-custom">
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="input-field" placeholder="Confirm Password">
            </div>
            @error('password_confirmation')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <button type="submit" class="login-btn">
                Reset Password
            </button>
        </form>
    </div>
</x-auth-component.main>
