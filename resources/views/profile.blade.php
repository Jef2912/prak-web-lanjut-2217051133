<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User - FC Barcelona Theme</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #A50044; /* Barca's maroon color */
            color: #004D98; /* Barca's blue color */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 400px;
            text-align: center;
        }
        .container h1 {
            color: #A50044;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .profile-pic img {
            border-radius: 15%;
            border: 3px solid #A50044;
            max-width: 150px;
            margin-bottom: 15px;
        }
        .info-box {
            margin-top: 20px;
        }
        .box {
            margin-bottom: 10px;
        }
        .box label {
            display: block;
            font-weight: bold;
            color: #004D98;
            margin-bottom: 5px;
        }
        .box input {
            width: 80%;
            padding: 10px;
            border: 2px solid #004D98;
            border-radius: 5px;
            font-size: 14px;
        }
        .logo-barca {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Logo FC Barcelona -->
        <div class="logo-barca">
            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png" alt="FC Barcelona Logo" style="max-width: 80px;">
        </div>
        
        <!-- Header Profil -->
        <h1>PROFILE</h1>
        
        <!-- Foto Profil -->
        <div class="profile-pic">
            <!-- Tampilkan foto user atau gambar default jika foto tidak ada -->
            @if ($user->foto)
                <img src="{{ asset($user->foto) }}" alt="Foto Profil">
            @else
                <img src="{{ asset('upload/img/default.jpeg') }}" alt="Foto Default">
            @endif
        </div>

        <!-- Informasi User -->
        <div class="info-box">
            <div class="box">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" value="{{ $user->nama }}" readonly>
            </div>
            <div class="box">
                <label for="kelas">Kelas:</label>
                <input type="text" id="kelas" value="{{ $user->kelas->nama_kelas ?? 'kelas tidak ditemukan' }}" readonly>
            </div>
            <div class="box">
                <label for="npm">NPM:</label>
                <input type="text" id="npm" value="{{ $user->npm }}" readonly>
            </div>
        </div>
    </div>
</body>
</html>