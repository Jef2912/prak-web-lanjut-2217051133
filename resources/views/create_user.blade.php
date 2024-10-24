<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Create User</h1>
    
    <!-- Form untuk input nama, npm, kelas -->
    <form action="{{ url('/user/store') }}" method="POST">
        <!-- Tambahkan token CSRF untuk keamanan -->
        @csrf

        <!-- Input Nama -->
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br><br>

        <!-- Input NPM -->
        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm"><br><br>

        <!-- Input Kelas -->
        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas"><br><br>

        <!-- Tombol Submit -->
        <button type="submit">Submit</button>
    </form>
</body>
</html>