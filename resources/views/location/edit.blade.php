<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit lokasi</title>
</head>
<body>
    <h1>Edit Lokasi</h1>
    <form action="{{ route('location.update') }}" method="POST">

        @csrf
        @method('PUT')

        <label>Nama Kota</label>
        <br>
        <input type="text" 
        name="nama_kota"
        value="{{ $location->nama_kota }}">
        <br><br>
        <label>Alamat</label>
        <br>
        <textarea name="alamat"  rows="5">
      {{ $location->alamat }}
        </textarea>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>