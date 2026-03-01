<!DOCTYPE html>
<html>
<head>
    <title>Caesar Cipher</title>
</head>
<body>

<h2>Caesar Cipher</h2>

<form method="POST" action="/caesar">
    @csrf

    Teks:<br>
    <input type="text" name="teks" required><br><br>

    Kunci:<br>
    <input type="number" name="kunci" required><br><br>

    Pilih Mode:<br>
    <select name="mode" required>
        <option value="">-- Pilih --</option>
        <option value="enkripsi">Enkripsi</option>
        <option value="dekripsi">Dekripsi</option>
    </select>
    <br><br>

    <button type="submit">Proses</button>
</form>

@if(isset($hasil))
    <h3>Hasil: {{ $hasil }}</h3>
@endif

</body>
</html>