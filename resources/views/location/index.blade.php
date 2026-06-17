<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data lokasi</title>
</head>
<body>
    <h1>Data Lokasi</h1>
    <a href="{{ route('location.create') }}">
        Tambah Lokasi
    </a>
    <br><br>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="10">
     <tr>
        <th>No</th>
        <th>Nama Kota</th>
        <th>Alamat</th>
        <th>Aksi</th>
     </tr>

     @foreach ($locations as $location)
     <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $location->nama_kota }}</td>
      <td>{{ $location->alamat }}</td>

      <td>
        <a href="{{ route('location.edit', $location->id) }}">
            edit
        </a>

        <form action="{{ route('location.destroy', $location->id) }}" method="POST"
            style="display:inline">

            @csrf
            @method('DELETE')
            <button type="submit">
             HAPUS
            </button>
        </form>
      </td>
     </tr>
     @endforeach
    </table>
</body>
</html>