<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="dashboard-page">

    <div class="dashboard-container">

        <!-- Navbar -->
        <div class="navbar">
            <h2>My Dashboard</h2>
            <div class="nav-right">
                <span class="user">Hi, {{ session('user') }}</span>
                <a href="/logout" class="logout">Logout</a>
            </div>
        </div>

        <!-- Content -->
        <div class="dashboard-content">

            <!-- Welcome (full width) -->
            <div class="dashboard-card main-card">
                <h1>Welcome Back</h1>
                <p>Selamat datang, <b>{{ session('user') }}</b> di dashboard kamu.</p>
            </div>

            <!-- Stats (di bawah, berjajar) -->
            <div class="stats">
                <div class="dashboard-card small-card">
                    <h3>📊 Total Login</h3>
                    <p>12</p>
                </div>

                <div class="dashboard-card small-card">
                    <h3>📁 Data</h3>
                    <p>5 Items</p>
                </div>

                <div class="dashboard-card small-card">
                    <h3>⚡ Aktivitas</h3>
                    <p>Aktif</p>
                </div>
            </div>

        </div>

</body>

</html>
