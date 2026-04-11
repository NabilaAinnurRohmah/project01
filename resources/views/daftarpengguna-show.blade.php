<!DOCTYPE html>
<html>

<head>
    <title>Detail Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
        }

        .card {
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .info {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            margin-top: 5px;
            color: #222;
            background: #f9f9f9;
            padding: 8px;
            border-radius: 6px;
        }

        .btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border-radius: 6px;
            text-decoration: none;
        }

        .btn:hover {
            background: #45a049;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <h2>Detail Pengguna</h2>

            <div class="info">
                <div class="label">Email</div>
                <div class="value">{{ $data->email }}</div>
            </div>

            <div class="info">
                <div class="label">Password</div>
                <div class="value">{{ $data->password }}</div>
            </div>

            <a href="/pengguna" class="btn">Kembali</a>
        </div>
    </div>

</body>

</html>
