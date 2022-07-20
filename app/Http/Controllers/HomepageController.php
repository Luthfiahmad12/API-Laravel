<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::orderBy('created_at')->paginate(20);
        // $data = array('title' => 'Data Mahasiswa', 'itemmahasiswa' => $mahasiswa);
        return view('homepage.index', compact('mahasiswa'));
    }
}
