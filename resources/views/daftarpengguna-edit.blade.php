<!DOCTYPE html>
<html>

<head>
    <title>Edit Pengguna</title>
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

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus {
            border-color: #4CAF50;
        }

        .btn {
            padding: 10px;
            border: none;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            width: 100%;
            margin-top: 10px;
        }

        .btn-save {
            background: #4CAF50;
        }

        .btn-save:hover {
            background: #45a049;
        }

        .btn-back {
            display: block;
            text-align: center;
            margin-top: 10px;
            padding: 10px;
            background: #f44336;
            color: white;
            border-radius: 6px;
            text-decoration: none;
        }

        .btn-back:hover {
            background: #d73833;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <h2>Edit Pengguna</h2>

            <form action="/pengguna/{{ $data->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ $data->email }}" required>
                </div>

                <div class="form-group">
                    <label>Password Baru</label>
                    <input type="password" name="password" placeholder="Kosongkan jika tidak diubah">
                </div>

                <button class="btn btn-save">Simpan Perubahan</button>
            </form>

            <a href="/pengguna" class="btn-back">Kembali</a>
        </div>
    </div>

</body>

</html>
