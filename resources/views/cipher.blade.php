<!DOCTYPE html>
<html>

<head>
    <title>Caesar Cipher</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            width: 350px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #4CAF50;
            color: white;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }

        .hasil {
            margin-top: 20px;
            padding: 10px;
            background: #e8f5e9;
            border-left: 5px solid #4CAF50;
        }
    </style>

</head>

<body>

    <div class="container">

        <h2>Caesar Cipher</h2>

        <form method="POST" action="caesar">
            @csrf

            <label>Teks</label>
            <input type="text" name="teks" required>

            <label>Kunci</label>
            <input type="number" name="kunci" required>

            <label>Pilih Mode</label>
            <select name="mode" required>
                <option value="">-- Pilih --</option>
                <option value="enkripsi">Enkripsi</option>
                <option value="dekripsi">Dekripsi</option>
            </select>

            <button type="submit">Proses</button>
        </form>

        @if (isset($hasil))
            <div class="hasil">
                <strong>Hasil:</strong> {{ $hasil }}
            </div>
        @endif

    </div>

</body>

</html>
