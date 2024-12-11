@extends('layouts.app')

@section('content')
<div style="text-align: center; padding: 20px;">

    <!-- Logo Barcelona -->
    <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png" 
         alt="FC Barcelona Logo" 
         style="width: 100px; margin-bottom: 20px;">

    <h1 style="color: #A50044; font-family: 'Arial', sans-serif; margin-bottom: 20px;">List of Users</h1>

    <!-- Tabel dengan gaya Barcelona -->
    <table style="width: 100%; border-collapse: collapse; background-color: #004D98; color: white; font-family: Arial, sans-serif; text-align: center;">
        <thead>
            <tr style="background-color: #A50044;">
                <th style="padding: 10px; border: 1px solid white;">ID</th>
                <th style="padding: 10px; border: 1px solid white;">Nama</th>
                <th style="padding: 10px; border: 1px solid white;">NPM</th>
                <th style="padding: 10px; border: 1px solid white;">Kelas</th>
                <th style="padding: 10px; border: 1px solid white;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td style="padding: 10px; border: 1px solid white;">{{ $user->id }}</td>
                    <td style="padding: 10px; border: 1px solid white;">{{ $user->nama }}</td>
                    <td style="padding: 10px; border: 1px solid white;">{{ $user->npm }}</td>
                    <td style="padding: 10px; border: 1px solid white;">{{ $user->nama_kelas }}</td>
                    <td style="padding: 10px; border: 1px solid white;">
                        <button style="background-color: #A50044; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;">
                            <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png" 
                                 alt="Action" 
                                 style="width: 20px; vertical-align: middle;"> Aksi
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection