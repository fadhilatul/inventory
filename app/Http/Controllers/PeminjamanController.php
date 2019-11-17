<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peminjaman;

class PeminjamanController extends Controller
{
    public function index()
    {
        return view('user.peminjaman.index');
    }

    public function create()
    {
        return view('user.peminjaman.tambah');
    }

    public function store()
    {
        return view('user.peminjaman.tambah');
    }
}
