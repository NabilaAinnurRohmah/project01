<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        .btn {
            padding: 6px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            font-size: 13px;
            text-decoration: none;
        }

        .btn-add {
            background: #4CAF50;
        }

        .btn-edit {
            background: #2196F3;
        }

        .btn-delete {
            background: #f44336;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: #4CAF50;
            color: white;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        form.inline {
            display: inline;
        }

        .form-box {
            margin-bottom: 20px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        input {
            padding: 6px;
            margin: 3px;
            width: 150px;
        }

        .logout {
            display: inline-block;
            padding: 6px 12px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 13px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Daftar Pengguna</h2>

        {{-- FORM TAMBAH --}}
        <div class="form-box">
            <form action="/pengguna" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="btn btn-add">Tambah</button>
            </form>

            <a href="/logout" class="logout">Logout</a>
        </div>

        {{-- TABEL --}}
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($pengguna as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->email }}</td>
                        <td>********</td>

                        <td>
                            {{-- DETAIL --}}
                            <a href="{{ route('pengguna.show', $item->id) }}" class="btn btn-add">Detail</a>

                            {{-- EDIT --}}
                            <a href="{{ route('pengguna.edit', $item->id) }}" class="btn btn-edit">Edit</a>

                            {{-- DELETE --}}
                            <form action="{{ route('pengguna.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-delete" onclick="return confirm('Yakin hapus?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>

                @empty
                    <tr>
                        <td colspan="4">Data kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>
