@extends('layouts.app')

@section('content')
<div style="text-align: center; margin-top: 70px;">


<!-- Overlay untuk menjaga teks tetap terlihat -->
<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #A50044;"></div>

<div style="position: relative; z-index: 1; padding: 50px; color: white;">

    <!-- Logo Barcelona -->
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png" 
         alt="FC Barcelona Logo" 
         style="width: 150px;">

<h1 style="color: #004D98; font-family: 'Arial', sans-serif; margin-top: 10px; text-shadow: 2px 2px 0px white, -2px 2px 0px white, 2px -2px 0px white, -2px -2px 0px white;">
    Create User
</h1>


    <!-- Form untuk input nama, npm, kelas -->
    <form action="{{ url('/user/store') }}" method="POST" enctype="multipart/form-data" style="background-color: #004D98; padding: 20px; border-radius: 10px; display: inline-block; text-align: left; color: white;">
        @csrf

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" style="width: 95%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: none;"><br>

        <label for="npm">NPM:</label><br>
        <input type="text" id="npm" name="npm" style="width: 95%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: none;"><br>

        <label for="kelas_id">Kelas:</label><br>
        <select name="kelas_id" id="kelas_id" style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px; border: none;">
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select><br>

        <input type="file" id="foto" name="foto"><br><br>
        <label for="foto">foto:</label><br>
        <button type="submit" style="background-color: #A50044; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">Submit</button><br><br>
    </form>
</div>
@endsection