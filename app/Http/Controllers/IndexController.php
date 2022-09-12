<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function index()
    {
        // ini untuk mengambil semua data di table user
        $data['user'] = DB::table('users')->get();
        // CHECK DATA
        // dd($data['user']);
        return view('index', $data);
    }

    public function edit($id_user)
    {
        // ini untuk mengambil satu user yang dipilih pada table user
        $data['user'] = DB::table('users')->where('id_user', $id_user)->first();
        return view('edit', $data);
    }

    public function update(Request $request, $id_user)
    {
        // menyimpan data yang di update
        // dd($request);

        $simpan = DB::table('users')
            ->where('id_user', $id_user)
            ->update([
                'nama_user' => $request->nama_user,
                'email' => $request->email,
                'jekel' => $request->jekel,
                'nohp' => $request->nohp,
                'alamat' => $request->alamat
            ]);

        if ($simpan == true) {
            echo "<script>
                alert('Data Berhasil Disimpan');
                window.location = '/';
                </script>";
        } else {
            echo "<script>
            alert('Data gagal Disimpan');
            window.location ='/edit/$id_user';
            </script>";
        }
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        // dd($request);
        $tambah = DB::table('users')->insert(
            [
                'nama_user' => $request->nama_user,
                'email' => $request->email,
                'jekel' => $request->jekel,
                'nohp' => $request->nohp,
                'alamat' => $request->alamat
            ]
        );
        if ($tambah == true) {
            echo "<script>
                alert('Data Berhasil Ditambahkan');
                window.location = '/';
                </script>";
        } else {
            echo "<script>
            alert('Data gagal Ditambahkan');
            window.location ='/tambah';
            </script>";
        }
    }

    public function hapus($id_user)
    {
        DB::table('users')
            ->where('id_user', $id_user)
            ->delete();
    }
}
