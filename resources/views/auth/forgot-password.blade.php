<x-auth-component.main>
    <div class="auth-card">
        <x-auth-session-status class="mb-3" :status="session('status')" />

        <h4 class="auth-title">Forgot Password?</h4>
        <p class="auth-sub">Enter your email to receive a password reset link</p>

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <label for="email" class="emails">Email Address</label>
            <div class="mb-3 input-group-custom">
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="input-field" placeholder="Email Address">
            </div>
            @error('email')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <button type="submit" class="login-btn">
                Email Password Reset Link
            </button>
        </form>
    </div>
</x-auth-component.main>
