<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaris;
use App\Jenis;
use App\Ruangan;

class InventarisController extends Controller
{
    public function index()
    {
        $data = Inventaris::all();
        return view('user.inventaris.index', ['data' => $data]);
    }

    public function create()
    {
        $jenis = Jenis::all();
        $ruangan = Ruangan::all();
        return view('user.inventaris.tambah', ['jenis'=>$jenis, 'ruangan'=>$ruangan]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $data = new Inventaris;
        $data->name = $request->nama;
        $data->kondisi = $request->kondisi;
        $data->keterangan = $request->keterangan;
        $data->jumlah = $request->jumlah;
        $data->id_jenis = $request->jenis;
        $data->tanggal_register = $request->tanggal_registrasi;
        $data->id_ruang = $request->ruangan;
        $data->kode_inventaris = $request->kode_inventaris;
        $data->save();

        return redirect('inventaris');
    }
}
