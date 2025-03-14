<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Form</title>
    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/ bootstrap@5.3.2/dist/css/ bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Profile Form</h2>
        <form action="/hasil-formulir" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Kelas:</label>
                <input type="text" class="form-control" name="kelas" required>
            </div>
            <div class="form-group">
                <label for="email">Judul Poster:</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="form-group">
                <label for="profile_photo">File Poster:</label>
                <input type="file" class="form-control-file" name="profile_photo" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/ bootstrap@5.3.2/dist/js/ bootstrap.bundle.min.js" ></script>
</body>
</html>