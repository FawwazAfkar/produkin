<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ config('app.name', 'Laravel') }}</title>

    {{-- <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- BoxIcons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-top: 100px;
        }

        .content {
            padding: 20px;
        }

        .table-container {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 10px;
        }

        .table-container h2 {
            margin-bottom: 15px;
        }

        .table-controls {
            display: flex;
            gap: 10px;
            margin-bottom: 15px;
        }

        .table-controls input[type="text"],
        .table-controls input[type="date"] {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .table-controls button {
            padding: 8px 12px;
            border: none;
            background-color: #333;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th, table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .status {
            padding: 5px 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        .status.available {
            background-color: #c8e6c9;
            color: #2e7d32;
        }

        .status.process {
            background-color: #ffecb3;
            color: #f57c00;
        }

        .status.not-available {
            background-color: #ffcdd2;
            color: #c62828;
        }

        .warning {
            color: #f57c00;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
            margin-top: auto;
            position: relative;
            bottom: 0;
            left: 0;
        }
        .navbar {
            position: fixed;
            top: 0;
            margin-left: 500px;
            width: calc(100% - 500px);
            height: 80px;
            z-index: 1;
            background-color: #ddd;
        }

        .navbar h1 {
            font-size: 24px;
            font-weight: bold;
            margin-left: 20px;
        }

        .user-profile {
            margin-right: 20px;
        }
        .sidebar {
            width: 500px;
            background-color: #f1f1f1;
            padding: 20px;
            height: 100vh;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            max-width: 100px;
        }

        .sidebar nav ul {
            list-style: none;
        }

        .sidebar nav ul li {
            margin: 15px 0;
            text-align: center;
            margin-top: 50px;
        }

        .sidebar nav ul li a {
            text-decoration: none;
            color: black;
            font-size: 30px;
        }

        .sidebar nav ul li a.active {
            background-color: #ddd;
            padding: 10px;
            display: block;
            border-radius: 5px;
        }
    </style>

</head>

<body>
    <x-sidebar />
    <x-navbar />

    <!-- Home Section -->
    <section class="home-section">
        <div class="home-content">
            <!-- Main Content -->
                <main class="main-content">
                    @yield('content')
                </main>
        </div>
    </section>
    <x-footer />

</body>
</html>