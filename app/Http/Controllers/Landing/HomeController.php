<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\penduduk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $penduduk = penduduk::all();
        $agenda = Agenda::all();
        return view("LandingPage.home", compact('penduduk','agenda'));
    }
    public function aduan()
    {
        // $penduduk = penduduk::all();
        return view("LandingPage.aduanwarga");
    }
    public function Bansos()
    {
        // $penduduk = penduduk::all();
        return view("LandingPage.penerimaanbansos");
    }
    public function Darurat()
    {
        // $penduduk = penduduk::all();
        return view("LandingPage.daruratbencana");
    }
}
