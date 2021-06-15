@extends('layouts.app')
@section('title', 'Mahasiswa')

@section('content')
    <center>
        <h2>Data Mahasiswa API</h2>
        <form action="{{ route('mahasiswa.post') }}" method="post">
            @method('POST')
            @csrf
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" placeholder="NIM">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" placeholder="Nama">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L" checked>Laki-laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>
                        <select name="prodi_id" id="prodi_id">
                            <option value="" disabled selected>-- Program Studi --</option>
                            @foreach ($prodi as $p)
                                <option value="{{ $p['id'] }}">{{ $p['nama_prodi'] }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Simpan">
                    </td>
                    <td></td>
                </tr>
            </table><br>
        </form>
        <table border="1">
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Prodi</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item['nim'] }}</td>
                    <td>{{ $item['nama'] }}</td>
                    <td>{{ $item['jenis_kelamin'] }}</td>
                    <td>{{ $item['prodi_id'] }}</td>
                    <td>
                        <a href="">Edit</a>
                        <form action="{{ url('mahasiswa/') }}/{{ $item['id'] }}" method="post">
                            @method('post')
                            @csrf

                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </center>
@endsection
