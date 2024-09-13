<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        // return response([
            //     'code' => 200,
            //     'response' => [
                //         'message' => 'Data berhasil ditampilkan',
                //         'data' => $data
                //     ]
                // ], 200);
        $data = Siswa::all();
        return response([
            'message' => 'Data berhasil ditampilkan',
            'data' => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'nis' => 'required|integer',
            'nama' => 'required|string',
            'alamat' => 'required|string',
        ]);

        return response([
            'message' => 'Data berhasil ditambahkan',
            'data' => Siswa::create($validator)
        ], 200);
    }

    public function show(string $id)
    {
        return response([
            'message' => 'Data berhasil ditampilkan',
            'data' => Siswa::find($id)
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        //
    }
 
    public function destroy(string $id)
    {
        //
    }
}
