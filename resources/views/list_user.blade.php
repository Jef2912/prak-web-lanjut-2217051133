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
                <th style="padding: 10px; border: 1px solid white;">Foto</th>
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
                        @if($user->foto)
                            <!-- Menampilkan gambar dari path yang disimpan di database -->
                            <img src="{{ asset($user->foto) }}" alt="Foto {{ $user->nama }}" style="width: 50px; height: 50px; object-fit: cover;">
                        @else
                            <!-- Jika tidak ada foto, tampilkan gambar default -->
                            <img src="{{ asset('upload/img/default.jpg') }}" alt="Foto Default" style="width: 50px; height: 50px; object-fit: cover;">
                        @endif
                    </td>
                    <td style="padding: 10px; border: 1px solid white;">
                    <div style="display: flex; justify-content: center; align-items: center;">
                        <!-- Tombol View -->
                        <a href="{{ route('user.show', $user->id)}}" class="btn btn-primary btn-sm" style="background-color: #A50044; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none;">
                            View
                        </a>
                        
                        <!-- Tombol Edit -->
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm" style="background-color: #FFA500; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none; margin-left: 3px;">
                            Edit
                        </a>
                        
                        <!-- Form Delete -->
                        <form action="{{ route('user.destroy', $user->id)}}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                            style="background-color: #dc3545; color: white; padding: 7px 10px; border-radius: 5px; border: none; cursor: pointer; margin-left: 3px;"
                            onclick="return confirm('Apakah anda yakin ingin menghapus user ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <button onclick="window.location.href='{{ url('/user/create') }}'" 
            style="background-color: #A50044; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-family: 'Arial', sans-serif; font-size: 16px;">
        Tambah Pengguna Baru
    </button>

</div>
@endsection