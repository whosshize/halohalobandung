<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="container">
        <div class="card shadow p-4 w-50 mx-auto">
            <h1 class="text-center text-primary">Informasi Pendaftaran</h1>
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Nama:</label>
                <p class="form-control-plaintext">{{ $data['name'] }}</p>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label fw-bold">Kelas:</label>
                <p class="form-control-plaintext">{{ $data['kelas'] }}</p>
            </div>
            <div class="mb-3">
                <label for="judul" class="form-label fw-bold">Judul Poster:</label>
                <p class="form-control-plaintext">{{ $data['judul'] }}</p>
            </div>
            <div class="mb-3 text-center">
                <label for="profile_photo" class="form-label fw-bold">File Poster:</label>
                <div>
                    <img src="{{ asset('storage/' . $data['photo_path']) }}" class="img-fluid border rounded" width="200" alt="Profile Photo">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>