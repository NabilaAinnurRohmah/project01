<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pengguna</title>
</head>

<body>
    <div>
        <h2>Daftar Pengguna</h2>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
                <th>created_at</th>
                <th>updated_at</th>
            </tr>

            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->email }}</td>
                    <td>*****</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->updated_at }}</td>
                </tr>
            @endforeach

        </table>
    </div>
</body>

</html>
