<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Lokasi</title>
</head>
<body>
    <h1>Tambah Lokasi</h1>
    <form action="{{ route('location.store') }}" method="POST">

        @csrf
        <label>Nama Kota</label>
        <br>
        <input type="text" name="nama_kota">
        <br><br>
        <label>Alamat</label>
        <br>
        <textarea name="alamat" rows="5"></textarea>
        <br><br>
        <button type="submit">
            Simpan
        </button>

    </form>
</body>
</html>