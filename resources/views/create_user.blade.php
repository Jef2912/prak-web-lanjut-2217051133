<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
<h1>Create User</h1>

<!-- Form untuk input nama, npm, kelas -->
<form action="{{ url('/user/store') }}" method="POST">
    @csrf

    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama"><br><br>

    <label for="npm">NPM:</label><br>
    <input type="text" id="npm" name="npm"><br><br>

    <label for="kelas_id">Kelas:</label><br>
    <select name="kelas_id" id="kelas_id">
        @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
        @endforeach
    </select><br><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>