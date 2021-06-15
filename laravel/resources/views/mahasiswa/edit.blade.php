@extends('layouts.app')
@section('title', 'Update Data')
@section('content')
    <center>
        <h2>Data Mahasiswa API</h2>
        <form action="{{ url('mahasiswa') }}/{{ $response['id'] }}" method="post">
            @method('PUT')
            @csrf
            <table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" placeholder="NIM" value="{{ $response['nim'] }}">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" placeholder="Nama" value="{{ $response['nama'] }}">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="L" {{ $response['jenis_kelamin'] == 'L' ? 'checked' : ''}}>Laki-laki
                        <input type="radio" name="jenis_kelamin" value="P" {{ $response['jenis_kelamin'] == 'P' ? 'checked' : ''}}>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>
                        <select name="prodi_id" id="prodi_id">
                            <option value="" disabled>-- Program Studi --</option>
                            @foreach ($prodi as $p)
                                <option value="{{ $p['id'] }}" {{ $response['prodi'] == $p['id'] ? 'selected' : ''}}>{{ $p['nama_prodi'] }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Update">
                    </td>
                    <td></td>
                </tr>
            </table><br>
        </form>
    </center>
@endsection
