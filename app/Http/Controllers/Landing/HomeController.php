<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\penduduk;
use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $penduduk = penduduk::count();
        $dusun = penduduk::distinct('dusun')->count('dusun');
        $rw = Rw::count();
        $rt = Rt::count();

        return view("LandingPage.home", compact('penduduk','dusun' ,'rw' , 'rt'));
    }
}
