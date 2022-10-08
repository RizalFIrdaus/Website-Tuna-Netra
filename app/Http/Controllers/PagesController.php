<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function tujuanpembelajaran()
    {
        return view('tp');
    }
    public function sistempernapasan()
    {
        return view('materi');
    }
    public function alatpernapasanhidung()
    {
        return view('alatpernapasanhidung');
    }
    public function alatpernapasan()
    {
        return view('alatpernapasan');
    }
    public function alatpernapasantenggorokan()
    {
        return view('alatpernapasantenggorokan');
    }
    public function alatpernapasanparuparu()
    {
        return view('alatpernapasanparuparu');
    }
    public function gangguanpernapasan()
    {
        return view('gangguanpernapasan');
    }
    public function sistempernapasanhewan()
    {
        return view('pernapasanhewan');
    }
    public function alatpernapasanparuhewan()
    {
        return view('alatpernapasanparuhewan');
    }
    public function alatpernapasaninsang()
    {
        return view('alatpernapasaninsang');
    }
    public function alatpernapasankulit()
    {
        return view('alatpernapasankulit');
    }
    public function alatpernapasantrakea()
    {
        return view('alatpernapasantrakea');
    }
    public function alatpernapasanamfibi()
    {
        return view('alatpernapasanamfibi');
    }
}
