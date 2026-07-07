@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="card">

    <div class="card-header">
        <h2>Dashboard Admin</h2>
    </div>

    <p style="margin-bottom:25px;">
        Selamat datang di Dashboard Admin <b>Printex</b>. Silakan pilih menu yang ingin dikelola.
    </p>

    <table>

        <thead>
            <tr>
                <th>Menu</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>Slider</td>
                <td>
                    <a href="{{ route('slider.index') }}" class="btn">
                        Edit
                    </a>
                </td>
            </tr>

            <tr>
                <td>Printing Solution</td>
                <td>
                    <a href="#" class="btn">
                        Edit
                    </a>
                </td>
            </tr>

            <tr>
                <td>Gambar</td>
                <td>
                    <a href="#" class="btn">
                        Edit
                    </a>
                </td>
            </tr>

            <tr>
                <td>Our Value</td>
                <td>
                    <a href="#" class="btn">
                        Edit
                    </a>
                </td>
            </tr>

        </tbody>

    </table>

</div>

@endsection