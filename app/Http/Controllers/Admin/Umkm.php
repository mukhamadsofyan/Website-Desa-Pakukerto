<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\modelumkm;
use Illuminate\Http\Request;

class Umkm extends Controller
{
    public function UmkmDesa()
    {
        $data = modelumkm::all();
        // Logic to retrieve UMKM data
        return view('Admin.umkm.viewumkm', compact('data'));
    }

    public function tambahUmkm()
    {
        // Logic to show form for adding new UMKM
        return view('Admin.umkm.tambahumkm');
    }

    public function insertUmkm(Request $request)
    {
         // Validasi data
        $request->validate([
            'nama_umkm' => 'required|string|max:255',
            'jenis_usaha' => 'required|string',
            'tahun_berdiri' => 'required|integer',
            'alamat' => 'required|string',
            'kontak' => 'required|numeric',
            'deskripsi' => 'nullable|string',
            'tagline' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'inner-group.*.phone' => 'required|string', // validasi produk UMKM
        ]);

        // Simpan foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('umkm_foto', 'public');
        }

        // Gabungkan produk UMKM ke dalam array
        $produkList = collect($request->input('inner-group'))->pluck('phone')->toArray();

        // Simpan ke database
        $umkm = new modelumkm();
        $umkm->nama_umkm = $request->nama_umkm;
        $umkm->nama_pemilik = $request->nama_pemilik;
        $umkm->jenis_usaha = $request->jenis_usaha;
        $umkm->tahun_berdiri = $request->tahun_berdiri;
        $umkm->produk = json_encode($produkList); // simpan sebagai JSON
        $umkm->alamat = $request->alamat;
        $umkm->kontak = $request->kontak;
        $umkm->deskripsi = $request->deskripsi;
        $umkm->tagline = $request->tagline;
        $umkm->foto = $fotoPath;
        $umkm->save();
        // Validate and save the data
        return redirect()->route('viewUmkmDesa')->with('success', 'UMKM added successfully');
    }

    public function editUmkm($id)
    {
        $umkm = modelumkm::findOrFail($id);
        // Logic to retrieve UMKM data for editing
        return view('Admin.umkm.editumkm', compact('umkm'));
    }

    public function updateUmkm(Request $request, $id)
    {
          $request->validate([
        'nama_agenda' => 'required',
        'tanggal_agenda' => 'required',
        'lokasi_agenda' => 'required',
        'deskripsi_agenda' => 'required',
        // tambahkan validasi lain sesuai kebutuhan
    ]);

    $umkm = modelumkm::findOrFail($id);

    $umkm->nama_agenda = $request->nama_agenda;
    $umkm->tanggal_agenda = $request->tanggal_agenda;
    $umkm->lokasi_agenda = $request->lokasi_agenda;
    $umkm->deskripsi_agenda = $request->deskripsi_agenda;

    // Jika ada upload file baru (poster), update juga:
    if ($request->hasFile('poster_agenda')) {
        $file = $request->file('poster_agenda');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('AgendaDesa'), $filename);
        $umkm->poster_agenda = $filename;
    }

    $umkm->save();
        // Logic to update UMKM data
        return redirect()->route('viewUmkmDesa')->with('success', 'UMKM updated successfully');
    }

    public function deleteUmkm($id)
    {
        $umkm = modelumkm::findOrFail($id);
        $umkm->delete();
        // Logic to delete UMKM data
        return redirect()->route('viewUmkmDesa')->with('success', 'UMKM deleted successfully');
    }
}
