<x-auth-component.main>
    <div class="auth-card">
        <h4 class="auth-title">Confirm Password</h4>
        <p class="auth-sub">This is a secure area. Please confirm your password before continuing.</p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <label for="password" class="emails">Password</label>
            <div class="mb-3 input-group-custom">
                <input id="password" type="password" name="password" required autocomplete="current-password" class="input-field" placeholder="Password">
            </div>
            @error('password')
                <div class="text-danger small mb-2">{{ $message }}</div>
            @enderror

            <button type="submit" class="login-btn">
                Confirm
            </button>
        </form>
    </div>
</x-auth-component.main>
