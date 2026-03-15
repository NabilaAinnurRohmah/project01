<!DOCTYPE html>
<html>
    <head>
        <title>
            Dashboard
        </title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body class="dashboard-page">

        <div class="dashboard-container">
            <div class="navbar">
                <h2>My Dashboard</h2>
                <a href="/logout" class="logout">Logout</a>
            </div>

            <div class="dashboard-content">
                <div class="card">
                    <p>Welcome, {{session('user')}}</p>
                </div>
            </div>
            </div>
    </body>
</html>