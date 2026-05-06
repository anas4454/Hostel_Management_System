<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        body {
            font-family: 'Inter', sans-serif;
            background: #efe9e1;
        }

        /* Sidebar */
        .sidebar {
            width: 240px;
            background: #48684a;
            color: white;
            min-height: 100vh;
            border-right: 1px solid #eee;
        }

        .logo {
            color: #4f6f52;
            font-weight: 700;
        }

        .menu {
            list-style: none;
            padding: 0;
        }

        .menu li {
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 5px;
            cursor: pointer;
        }

        .menu li.active {
            background: #edf3ee;
            color: #4f6f52;
        }

        a{
            text-decoration: none;
            color: inherit;
        }

        /* Topbar */
        .topbar {
            background: white;
            border-bottom: 1px solid #eee;
            height: 60px;
            padding: 0 20px;
        }

        .search {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 6px 10px;
        }

        .hamburger {
            display: none;
            font-size: 24px;
            cursor: pointer;
            margin-right: 10px;
        }

        /* Cards */
        .card-box {
            background: white;
            padding: 20px;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        }

        .card-box h3 {
            margin-top: 10px;
        }

        /* Circle */
        .circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: #edf3ee;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-top: 15px;
        }

        /* List */
        .list {
            padding-left: 20px;
        }

        .list li {
            margin-bottom: 6px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                width: 240px;
                height: 100vh;
                background: #48684a;
                transform: translateX(-100%);
                transition: transform 0.3s ease;
                z-index: 1050;
            }

            .sidebar.show {
                transform: translateX(0);
            }

            .main {
                width: 100%;
                margin-left: 0;
                padding-top: 70px;
            }

            .topbar {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                z-index: 1040;
                padding: 10px 15px;
            }

            .hamburger {
                display: block;
            }

            .menu li {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <div class="d-flex">

        <x-admin-component.sidebar/>



        <!-- MAIN -->
        <div class="main flex-grow-1">

            <x-admin-component.topbar/>

            <!-- STATS -->
            {{ $slot }}


        </div>

    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        }
    </script>

</body>

</html>
