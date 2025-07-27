<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\penduduk;
use App\Models\Rw;
use App\Models\Rt;
use App\Models\sambutankades;
use App\Models\testimonial;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function homeAdmin()
    {
        // Logic for the admin home page
        return view('Admin.dashboard');
    }


    /////////////////////////Sambutan Kades//////////////////////////
    public function sambutanKades()
    {

        $data = sambutankades::all();
        return view('Admin.Home.Sambutan.Sambutan', compact('data'));
    }

    public function editsambutan($id)
    {
        $data = sambutankades::findOrFail($id);
        return view('Admin.Home.Sambutan.editsambutan', compact('data'));
    }
    public function updatesambutan(Request $request, $id)
    {
        $sambutan = sambutankades::findOrFail($id);

        // Simpan nama file lama sebagai default
        $fotokades = $sambutan->foto;

        // Jika ada file baru di-upload
        if ($request->hasFile('foto')) {
            $posterFile = $request->file('foto');
            $fotokades = time() . '_' . $posterFile->getClientOriginalName();
            $posterFile->move(public_path('kades'), $fotokades);
        }

        // Update data agenda
        $sambutan->update([
            'nama'     => $request->input('nama'),
            'sambutan'  => $request->input('sambutan'),
            'foto'   => $fotokades,
        ]);

        return redirect()->route('viewsambutanKades')->with('success', 'Agenda berhasil diperbarui');
    }



    //////////////////////////////Total Penduduk///////////////////////////////////////
    public function Penduduk()
    {

        $datapenduduk = penduduk::with('rw','rt')->get();
        return view('Admin.Home.Kependudukan.DataKependudukan', compact('datapenduduk'));
    }
    public function tambahpenduduk()
    {   
        $rw = RW::with('rt')->get();
        return view('Admin.Home.Kependudukan.TambahKependudukan',compact('rw'));
    }
    public function storependuduk(Request $request)
    {
        $data = penduduk::create([
            'nama' => $request->input('nama'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
             'umur' => $request->input('umur'),   
            'alamat' => $request->input('alamat'),
            'dusun' => $request->input('dusun'),
            'pendidikan' => $request->input('pendidikan'),
            'pekerjaan' => $request->input('pekerjaan'),
            'agama' => $request->input('agama'),
            'status_perkawinan' => $request->input('status_perkawinan'),
            'rw_id' => $request->rw_id,
             'rt_id' => $request->rt_id,
        ]);
        return redirect()->route('viewPenduduk')->with('success', 'Berhasil Di Tambahkan');
    }
    public function editpenduduk($id)
    {
        $datapenduduk = penduduk::findOrFail($id);
        return view('Admin.Home.Kependudukan.EditKependudukan', compact('datapenduduk'));
    }
    public function updatependuduk(Request $request, $id)
    {
       
        $uppenduduk = penduduk::findOrFail($id);

        // Update data agenda
        $uppenduduk->update([
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'dusun' => $request->input('dusun'),
            'pendidikan' => $request->input('pendidikan'),
            'pekerjaan' => $request->input('pekerjaan'),
            'agama' => $request->input('agama'),
            'status_perkawinan' => $request->input('status_perkawinan'),
        ]);
        // dd($uppenduduk);
        return redirect()->route('viewPenduduk')->with('success', 'Agenda berhasil diperbarui');
    }
    ////////////////////////////////////////////RT&RW///////////////////////////////////
    public function Rw()
    {
        $data = Rw::all();
        return view('Admin.Home.Rw.Rw', compact('data'));
    }
    public function tambahrw()
    {
        return view('Admin.Home.Rw.TambahRw');
    }
    public function storerw(Request $request)
    {
        $data = Rw::create([
            'no_rw' => $request->input('no_rw'),
            'dusun' => $request->input('dusun'),
        ]);
        return redirect()->route('viewRw')->with('success', 'Berhasil Di Tambahkan');
    }
    public function editrw($id)
    {
        $rw = Rw::findOrFail($id);
        return view('Admin.Home.Rw.EditRw', compact('rw'));
    }
    public function updaterw(Request $request, $id)
    {
        $uprw = Rw::findOrFail($id);

        
        $uprw->update([
            'no_rw' => $request->input('no_rw'),
            'dusun' => $request->input('dusun'),
        ]);

        return redirect()->route('viewRw')->with('success', 'Berhasil diperbarui');
    }


    public function Rt()
    {
        $data = Rt::with('rw')->get();
        return view('Admin.Home.Rt.Rt', compact('data'));
    }
    public function tambahrt()
    {
        $rw = Rw::all();
        return view('Admin.Home.Rt.TambahRt',compact('rw'));
    }
    public function storert(Request $request)
    {
        $data = Rt::create([
            'dusun' => $request->input(
                'dusun'),
            'no_rt' => $request->input('no_rt'),
            'rw_id' => $request->input('rw_id'),
        ]);
        return redirect()->route('viewRt')->with('success', 'Berhasil Di Tambahkan');
    }
    public function editrt($id)
    {
        $rt = Rt::findOrFail($id);
        $rw = Rw::all();

        return view('Admin.Home.Rt.EditRt', compact('rt','rw'));
    }
     public function updatert(Request $request, $id)
    {
        $uprt = Rt::findOrFail($id);
        $uprt->update([
            'no_rt' => $request->input('no_rt'),
        ]);

        return redirect()->route('viewRt')->with('success', 'Berhasil diperbarui');
    }



    ////////////////////////////////////////////TESTIMONIALLLL///////////////////////////////////
    public function testimonialDesa()
    {
        $data = testimonial::all();
        // Logic for the agenda desa page
        return view('Admin.Home.Testimoni.Testimoni', compact('data'));
    }
    public function tambahtestimoni()
    {
        return view('Admin.Home.Testimoni.TambahTestimoni');
    }
    public function inserttestimoni(Request $request)
    {
    $testi = null;

    // if ($request->hasFile('foto_testimonial')) {
    //     $posterFile = $request->file('foto_testimonial');
    //     $testi = $posterFile->getClientOriginalName();
    //     $posterFile->move(public_path('fototestimonial'), $testi);
    // }

    $data = testimonial::create([
        'nama' => $request->input('nama'),
        'keterangan' => $request->input('keterangan'),
        'deskripsi_testimonial' => $request->input('deskripsi_testimonial'),
        'rating' => $request->input('rating'),
      
    ]);
        return redirect()->route('viewtestimonialDesa')->with('success', 'Berhasil Di Tambahkan');
    }

    public function accepttestimonial($id)
    {
        $data = testimonial::findOrFail($id);
        $data->update([
            'status' => 1,
        ]);
               return redirect()->route('viewtestimonialDesa')->with('success', 'Berhasil Di Setujui');

    }
    public function rejecttestimonial($id)
    {
        $data = testimonial::findOrFail($id);
        $data->update([
            'status' => 2,
        ]);
               return redirect()->route('viewtestimonialDesa')->with('success', 'Berhasil Di Tolak');

    }
    
    // public function home()
    // {
    //     // Logic for the landing home page
    //     return view('Landing.home');
    // }
}
