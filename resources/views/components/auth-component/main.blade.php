<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f4f7f4;
        }

        /* Layout */
        .auth-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* LEFT SIDE (IMAGE) */
        .auth-left {
            flex: 1;
            background:
                linear-gradient(rgba(47, 79, 47, 0.75), rgba(47, 79, 47, 0.75)),
                url('https://images.unsplash.com/photo-1505693416388-ac5ce068fe85');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .brand {
            font-weight: 700;
            font-size: 24px;
        }

        .heading {
            font-size: 42px;
            font-weight: 700;
            margin-top: 20px;
            line-height: 1.2;
        }

        .heading span {
            color: #d1fae5;
        }

        .sub-text {
            margin-top: 15px;
            max-width: 420px;
            opacity: 0.9;
        }

        /* Features */
        .feature {
            display: flex;
            gap: 12px;
            margin-top: 20px;
            align-items: center;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* RIGHT SIDE */
        .auth-right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* CARD */
        .auth-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(12px);
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
            /* height: 30rem; */
        }

        /* Titles */
        .auth-title {
            text-align: center;
            font-weight: 600;
        }

        .auth-sub {
            text-align: center;
            font-size: 14px;
            color: #6b7280;
            margin-bottom: 20px;
        }

        /* Input group */
        .input-group-custom {
            position: relative;
        }

        .input-icon {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            color: #6b7280;
        }

        .input-field {
            width: 100%;
            padding: 10px 10px 10px 35px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        /* Button */
        .login-btn {
            background: linear-gradient(135deg, #4f6f52, #2f4f2f);
            border: none;
            color: white;
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            margin-top: 15px;
            font-weight: 500;
        }

        /* Divider */
        .divider {
            text-align: center;
            margin: 15px 0;
            color: #9ca3af;
        }

        /* Social buttons */
        .social-btn {
            width: 100%;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 10px;
            margin-top: 10px;
            background: white;
            text-align: center;
        }

        .emails {
            display: block;
            margin: 7px 0 10px;
            /* padding: 8px 0; */
        }

        /* Responsive */
        @media (max-width: 992px) {
            .auth-left {
                display: none;
            }
        }
    </style>

</head>

<body>

    <div class="auth-wrapper">

        <!-- LEFT -->
        <div class="auth-left">
            <div class="brand">Hostel Stay</div>

            <div class="heading">
                Welcome Back <br>
                <span>Let’s Find Your Perfect Stay</span>
            </div>

            <p class="sub-text">
                Login to access bookings, explore offers and manage your stays easily.
            </p>

            <div class="feature">
                <div class="feature-icon">✔</div>
                <div>Secure & Trusted</div>
            </div>

            <div class="feature">
                <div class="feature-icon">🏢</div>
                <div>Verified Properties</div>
            </div>

            <div class="feature">
                <div class="feature-icon">🎧</div>
                <div>24/7 Support</div>
            </div>
        </div>


        <!-- RIGHT -->
        <div class="auth-right">

            {{ $slot }}

        </div>

    </div>

</body>

</html>
