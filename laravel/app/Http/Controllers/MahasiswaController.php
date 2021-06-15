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
        return view ('mahasiswa.index', [
            'data' => $response,
            'prodi' => $prodi,
        ]);
    }
    public function store(Request $request)
    {
        $response = Http::post('http://127.0.0.1:8000/api/mahasiswa', $request->all());
        return redirect()->route('mahasiswa.index');
    }
    public function destroy(Request $request, $id)
    {
        $response = Http::post('http://127.0.0.1:8000/api/mahasiswa/', $id);
        dd($response);
        return redirect()->route('mahasiswa.index');
    }
}
