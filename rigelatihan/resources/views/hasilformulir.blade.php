<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Result</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/ bootstrap@5.3.2/dist/css/ bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Informasi Pendaftaran</h1>
        <p>Nama: {{ $data['name'] }}</p>
        <p>Kelas: {{ $data['kelas'] }}</p>
        <p>Judul Poster: {{ $data['judul'] }}</p>
        <p>Photo:</p>
        <img src="{{ asset('storage/' . $data['photo_path']) }}" width="200" alt="Profile Photo">
    </div>
</body>
</html>