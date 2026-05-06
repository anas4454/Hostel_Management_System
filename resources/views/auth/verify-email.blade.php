<x-auth-component.main>
    <div class="auth-card">
        <h4 class="auth-title">Verify Your Email</h4>
        <p class="auth-sub">Thanks for signing up! Please verify your email address by clicking the link we just emailed to you. If you didn't receive the email, we will gladly send you another.</p>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-success">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mt-4">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="login-btn">
                    Resend Verification Email
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-link text-danger p-0 ms-3" style="text-decoration: underline;">
                    Log Out
                </button>
            </form>
        </div>
    </div>
</x-auth-component.main>
