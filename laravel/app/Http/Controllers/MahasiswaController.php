<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    public function index()
    {
        $response = Http::get('http://127.0.0.1:8000/api/mahasiswa')->json('data');
        $prodi = Http::get('http://127.0.0.1:8000/api/prodi')->json('data');
        // dd($response['message']);
        return view ('mahasiswa.index', compact(['response', 'prodi']));
    }
    public function store(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/api/mahasiswa', $request->all());
        return redirect()->route('mahasiswa.index');
    }
    public function show($id)
    {
        $response = Http::get('http://127.0.0.1:8000/api/mahasiswa/' . $id)->json('data');
        $prodi = Http::get('http://127.0.0.1:8000/api/prodi')->json('data');
        return view('mahasiswa.edit', compact(['response', 'prodi']));
    }
    public function destroy($id)
    {
        $response = Http::delete('http://127.0.0.1:8000/api/mahasiswa/'. $id)->json('data');
        return redirect()->route('mahasiswa.index');
    }
    public function update(Request $request, $id)
    {
        $response = Http::put('http://127.0.0.1:8000/api/mahasiswa/' . $id, $request->all());
        return redirect()->route('mahasiswa.index');
    }
}
