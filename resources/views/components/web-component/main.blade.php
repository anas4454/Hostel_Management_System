<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Stay</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        :root {
            --green: #274f2b;
            --light-green: #edf3ee;
            --text-dark: #1f2937;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8faf9;
        }


        /* Navbar */
        .nav-link {
            color: #444;
            font-weight: 500;
        }

        .nav-link.active {
            color: var(--green);
            border-bottom: 2px solid var(--green);
        }

        /* Hero */
        .hero {
            padding: 60px 0;
            background-color: #efe9e1;
        }

        .hero-title {
            font-size: 52px;
            font-weight: 700;
            color: var(--text-dark);
            line-height: 1.2;
        }

        .hero-title span {
            color: var(--green);
            font-family: 'Playfair Display', serif;
        }

        .hero-text {
            color: #6b7280;
            margin: 15px 0 25px;
        }


        /* Features */
        .features {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            color: #6b7280;
            font-size: 14px;
        }

        /* Image */
        .image-box img {
            border-radius: 50% 50% 0 0;
            max-height: 400px;
            object-fit: cover;
        }

        /* Stats */
        .stats {
            margin-top: 40px;
            background: white;
            padding: 20px;
            border-radius: 16px;
            display: flex;
            justify-content: space-around;
            text-align: center;
        }

        .stats div {
            font-weight: 600;
            color: var(--text-dark);
        }

        .stats small {
            display: block;
            color: #6b7280;
            font-weight: 400;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 36px;
            }

            .search-box {
                flex-direction: column;
            }

            .stats {
                flex-direction: column;
                gap: 15px;
            }
        }

        /* Section Base */
        .why-section {
            background: linear-gradient(to bottom, #f7f9f7, #ffffff);
            font-family: 'Inter', sans-serif;
        }

        /* Section Text */
        .section-tag {
            font-size: 12px;
            font-weight: 600;
            color: #6b7c6b;
            letter-spacing: 1px;
        }

        .section-title {
            font-size: 32px;
            font-weight: 700;
            color: #1f2937;
        }

        .section-title span {
            color: #4f6f52;
        }

        .section-desc {
            color: #6b7280;
            margin-top: 10px;
        }

        /* Feature Cards */
        .feature-card {
            background: #fff;
            padding: 20px;
            border-radius: 14px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            text-align: left;
            height: 100%;
        }

        .feature-card .icon {
            font-size: 22px;
            background: #edf3ee;
            width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .feature-card h6 {
            font-weight: 600;
        }

        .feature-card p {
            font-size: 13px;
            color: #6b7280;
        }

        /* About Box */
        .about-box {
            background: #f3f6f3;
            padding: 30px;
            border-radius: 16px;
        }

        .about-title {
            font-size: 26px;
            font-weight: 700;
            margin: 10px 0;
        }

        .about-text {
            color: #6b7280;
        }

        .about-list {
            padding-left: 0;
            list-style: none;
            margin-top: 15px;
        }

        .about-list li {
            margin-bottom: 8px;
            color: #4b5563;
            font-size: 14px;
        }

        /* Image */
        .image-wrapper {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
        }

        .image-wrapper img {
            border-radius: 16px;
            height: 100%;
            object-fit: cover;
        }

        /* Overlay */
        .overlay-box {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(79, 111, 82, 0.9);
            color: white;
            padding: 15px;
            border-radius: 12px;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            font-size: 14px;
        }

        .overlay-box div {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .section-title {
                font-size: 26px;
            }

            .overlay-box {
                flex-direction: column;
                gap: 10px;
            }
        }

        /* Steps Section */
        .steps-section {
            background: #f9fbf9;
        }

        /* Steps */
        .steps {
            gap: 20px;
        }

        .step {
            max-width: 180px;
        }

        .step-icon {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #edf3ee;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin: 0 auto 10px;
        }

        .step-icon.orange {
            background: #fdebd3;
        }

        .step-arrow {
            font-size: 24px;
            color: #9ca3af;
        }

        /* CTA */
        .cta-box {
            background: #f3f6f3;
            padding: 25px;
            border-radius: 16px;
            text-align: left;
        }

        /* Testimonials */
        .testimonial-card {
            background: white;
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .testimonial-card .quote {
            font-size: 14px;
            color: #4b5563;
        }

        .user {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
        }

        .user img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .stars {
            color: #fbbf24;
            margin-top: 10px;
        }

        /* Blog */
        .blog-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }

        .blog-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .blog-content {
            padding: 15px;
        }

        .blog-content .date {
            font-size: 12px;
            background: #edf3ee;
            padding: 5px 10px;
            border-radius: 8px;
            display: inline-block;
            margin-bottom: 8px;
        }

        .view-all {
            color: #4f6f52;
            font-weight: 500;
            text-decoration: none;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .steps {
                flex-direction: column;
                align-items: center;
            }

            .step-arrow {
                display: none;
            }

            .cta-box {
                text-align: center;
            }
        }

        /* Footer Section Styles - now global, not just mobile */
        .footer-section {
            background: linear-gradient(135deg, #2c4f2c 0%, #4f6f52 100%);
            color: #e8f0e9;
            font-family: 'Inter', sans-serif;
            padding: 60px 0 20px;
            position: relative;
        }

        .footer-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #4f6f52, #6b8e6b);
        }

        .footer-title {
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 15px;
        }

        .footer-text {
            font-size: 14px;
            color: #cdd8cc;
            line-height: 1.6;
        }

        .newsletter-box {
            display: flex;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            max-width: 320px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .newsletter-box input {
            border: none;
            padding: 12px 15px;
            flex: 1;
            font-size: 14px;
            border-radius: 12px 0 0 12px;
        }

        .newsletter-box input:focus {
            outline: none;
            box-shadow: inset 0 0 0 2px #4f6f52;
        }

        .newsletter-box button {
            background: #4f6f52;
            border: none;
            padding: 0 18px;
            color: #fff;
            display: flex;
            align-items: center;
            border-radius: 0 12px 12px 0;
            transition: background 0.3s;
        }

        .newsletter-box button:hover {
            background: #3d5a3d;
        }

        .footer-heading {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            text-decoration: none;
            color: #cdd8cc;
            font-size: 14px;
            transition: all 0.3s ease;
            position: relative;
        }

        .footer-links a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #fff;
            transition: width 0.3s;
        }

        .footer-links a:hover {
            color: #fff;
            padding-left: 8px;
        }

        .footer-links a:hover::after {
            width: 100%;
        }

        .social-icons {
            display: flex;
            gap: 12px;
        }

        .social-icons a {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 16px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .social-icons a:hover {
            background: #fff;
            color: #4f6f52;
            transform: translateY(-3px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .payment-icons {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .payment-icons span {
            background: #fff;
            color: #333;
            font-size: 12px;
            padding: 6px 10px;
            border-radius: 8px;
            font-weight: 600;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            font-size: 14px;
            color: #cdd8cc;
            padding-top: 20px;
        }

        @media (max-width: 992px) {
            .footer-title {
                font-size: 18px;
            }

            .footer-section {
                padding: 40px 0 20px;
            }

            .newsletter-box {
                max-width: 100%;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }

            .social-icons {
                justify-content: center;
            }

            .payment-icons {
                justify-content: center;
            }
        }

        /* ____________________________________________________________________________________________________ */
        /*  About page css */
        /* Base */
        body {
            font-family: 'Inter', sans-serif;
        }

        /* HERO */
        .about-hero {
            background: #efe9e1;
        }

        .badge-soft {
            background: #e7efe7;
            color: #4f6f52;
            padding: 8px 14px;
            border-radius: 20px;
            font-size: 13px;
        }

        /* Heading */
        .hero-heading {
            font-size: 44px;
            font-weight: 700;
            color: #1f2937;
            line-height: 1.2;
        }

        .hero-heading span {
            color: #4f6f52;
        }

        .hero-text {
            color: #6b7280;
            margin-top: 15px;
            max-width: 500px;
        }

        /* Image */
        .hero-image img {
            border-radius: 120px 0 0 120px;
            object-fit: cover;
        }


        /* WHO SECTION */
        .section-tag {
            font-size: 12px;
            color: #4f6f52;
            font-weight: 600;
        }

        .who-title {
            font-size: 32px;
            font-weight: 700;
            color: #1f2937;
            margin: 10px 0;
        }

        .who-text {
            color: #6b7280;
        }

        .who-list {
            list-style: none;
            padding: 0;
            margin-top: 15px;
        }

        .who-list li {
            margin-bottom: 10px;
            color: #374151;
            font-size: 14px;
        }

        /* Image */
        .who-image {
            position: relative;
        }

        .who-image img {
            border-radius: 16px;
        }

        /* Mission Card */
        .mission-card {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: rgba(79, 111, 82, 0.95);
            color: white;
            padding: 15px;
            border-radius: 12px;
            max-width: 260px;
        }

        .mission-card h6 {
            font-weight: 600;
        }

        .mission-card p {
            font-size: 13px;
            margin-top: 5px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-heading {
                font-size: 32px;
            }

            .hero-image img {
                border-radius: 20px;
                margin-top: 20px;
            }

            .stats-bar .stat {
                border-right: none;
                margin-bottom: 15px;
            }

            body {
                font-family: 'Inter', sans-serif;
            }

            /* Section */
            .journey-section {
                background: #f6f8f6;
            }

            /* Title */
            .section-title {
                font-size: 28px;
                font-weight: 700;
                color: #1f2937;
            }

            /* Cards */
            .feature-card {
                background: #fff;
                padding: 25px 15px;
                border-radius: 16px;
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
                transition: 0.3s;
            }

            .feature-card:hover {
                transform: translateY(-5px);
            }

            .feature-card .icon {
                font-size: 24px;
                background: #edf3ee;
                width: 60px;
                height: 60px;
                margin: auto;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .feature-card h6 {
                margin-top: 10px;
                font-weight: 600;
            }

            .feature-card p {
                font-size: 13px;
                color: #6b7280;
            }

            /* Journey */
            .journey-title {
                font-weight: 700;
            }

            .journey-text {
                color: #6b7280;
                margin: 15px 0;
            }

            /* Timeline */
            .timeline {
                position: relative;
                align-items: center;
            }

            .timeline-item {
                width: 120px;
            }

            .circle {
                width: 60px;
                height: 60px;
                background: #edf3ee;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: auto;
                font-size: 20px;
            }

            .line {
                flex: 1;
                height: 2px;
                background: #cbd5c0;
            }

            /* CTA */
            .cta-box {
                background: #eef3ee;
                padding: 25px;
                border-radius: 16px;
            }

            .cta-img {
                width: 70px;
                height: 70px;
                background: #dce8dc;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 30px;
            }

            /* Responsive */
            @media (max-width: 992px) {
                .timeline {
                    flex-direction: column;
                    gap: 20px;
                }

                .line {
                    display: none;
                }

                .cta-box {
                    text-align: center;
                }
            }

            /* __________________________________________________________________________________________ */

            /* facilities page css */

            /* Section Background */
            .facilities-section {
                background-color: #efe9e1;
                font-family: 'Inter', sans-serif;
            }

            .facilities-container {
                background-color: #efe9e1;
            }

            /* Badge */
            .badge-soft {
                background: #efe9e1;
                color: #4f6f52;
                padding: 8px 14px;
                border-radius: 20px;
                font-size: 13px;
            }

            /* Title */
            .facilities-title {
                font-size: 42px;
                font-weight: 700;
                color: #1f2937;
                line-height: 1.2;
            }

            .facilities-title span {
                color: #4f6f52;
            }

            /* Text */
            .facilities-text {
                margin-top: 15px;
                color: #6b7280;
                max-width: 480px;
            }

            /* Image Styling */
            .facilities-image img {
                border-radius: 120px 0 0 120px;
                object-fit: cover;
                max-height: 420px;
            }


            /* Responsive */
            @media (max-width: 992px) {
                .facilities-title {
                    font-size: 30px;
                }

                .facilities-image img {
                    border-radius: 20px;
                    margin-top: 20px;
                }


            }

            .premium-facilities {
                background: linear-gradient(to bottom, #f8faf8, #ffffff);
                font-family: 'Inter', sans-serif;
            }

            /* Title */
            .title {
                font-size: 34px;
                font-weight: 700;
                color: #1f2937;
            }

            .title-line {
                width: 70px;
                height: 3px;
                background: #4f6f52;
                margin: 10px auto;
                border-radius: 10px;
            }

            /* Card */
            .facility {
                background: rgba(255, 255, 255, 0.7);
                backdrop-filter: blur(10px);
                border-radius: 18px;
                padding: 18px;
                text-align: center;
                transition: all 0.3s ease;
                border: 1px solid #edf3ee;
            }

            .facility:hover {
                transform: translateY(-6px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            }

            /* Icon */
            .icon {
                width: 60px;
                height: 60px;
                margin: auto;
                border-radius: 50%;
                background: linear-gradient(135deg, #edf3ee, #dce8dc);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 26px;
            }

            /* Text */
            .facility h6 {
                margin-top: 10px;
                font-weight: 600;
            }

            .facility p {
                font-size: 12px;
                color: #6b7280;
            }

            /* Info Box */
            .info-box {
                background: #eef3ee;
                padding: 30px;
                border-radius: 20px;
            }

            .info-box h3 {
                font-weight: 700;
            }

            .info-box p {
                color: #6b7280;
            }

            /* Mini features */
            .mini {
                background: white;
                padding: 10px 14px;
                border-radius: 10px;
                font-size: 13px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            }

            /* CTA */
            .cta {
                background: linear-gradient(135deg, #eef3ee, #e6efe6);
                padding: 25px;
                border-radius: 18px;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .title {
                    font-size: 26px;
                }

                .cta {
                    text-align: center;
                    gap: 15px;
                }
            }


            /* ________________________________________________________________________________________ */

            /* contact css */
            .contact-section {
                background: #f7f9f7;
                font-family: 'Inter', sans-serif;
            }

            /* Badge */
            .badge-soft {
                background: #e7efe7;
                padding: 8px 14px;
                border-radius: 20px;
                color: #4f6f52;
                font-size: 13px;
            }

            /* Title */
            .contact-title {
                font-size: 40px;
                font-weight: 700;
                color: #1f2937;
            }

            .contact-title span {
                color: #4f6f52;
            }

            .contact-text {
                color: #6b7280;
                margin-top: 10px;
            }

            /* Image */
            .rounded-hero {
                border-radius: 120px 0 0 120px;
            }

            /* Contact Cards */
            .contact-cards {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .card-item {
                background: white;
                padding: 15px;
                border-radius: 12px;
                text-align: center;
            }

            .card-item .icon {
                font-size: 22px;
                margin-bottom: 5px;
            }

            /* Form */
            .form-box {
                background: white;
                padding: 25px;
                border-radius: 16px;
            }

            .form-control {
                border-radius: 10px;
                padding: 10px;
            }

            /* Map */
            .map-box {
                background: white;
                padding: 25px;
                border-radius: 16px;
            }

            .map iframe {
                width: 100%;
                height: 250px;
                border: none;
                border-radius: 12px;
            }

            .location-card {
                background: #eef3ee;
                padding: 15px;
                border-radius: 12px;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .contact-title {
                    font-size: 28px;
                }

                .contact-cards {
                    grid-template-columns: 1fr;
                }

                .rounded-hero {
                    border-radius: 20px;
                    margin-top: 20px;
                }
            }

            .work-hero {
                background: #efe9e1;
            }

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


        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <x-web-component.header />
    <!-- Hero Section -->

    {{ $slot }}

    <x-web-component.footer />

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
