<!DOCTYPE html>
<html>
<head>
    <title>Caesar Cipher</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Caesar Cipher</h4>
                </div>

                <div class="card-body">

                    <form method="POST" action="caesar">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Teks</label>
                            <input type="text" name="teks" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kunci</label>
                            <input type="number" name="kunci" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pilih Mode</label>
                            <select name="mode" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="enkripsi">Enkripsi</option>
                                <option value="dekripsi">Dekripsi</option>
                            </select>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                Proses
                            </button>
                        </div>

                    </form>

                    @if(isset($hasil))
                        <div class="alert alert-success mt-4 text-center">
                            <strong>Hasil:</strong> {{ $hasil }}
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>