<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\penduduk;
use App\Models\Rt;
use App\Models\Rw;
use App\Models\Aduan;
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
    public function aduan()
    {
        // $penduduk = penduduk::all();
        return view("LandingPage.aduanwarga");
    }
    public function storeaduan(Request $request){
        
        $data=Aduan::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'kategori' => $request->kategori,
            'isi' => $request->isi,
            'foto' => $request->foto
        ]);
        if ($request->hasFile('foto')) {
        $posterFile = $request->file('foto');
        $posterName = time() . '_' . $posterFile->getClientOriginalName();
        $posterFile->move(public_path('Aduan'), $posterName);
    }
        return back()->with('success', 'Aduan berhasil dikirim!');

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
