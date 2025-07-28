<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaDesa extends Controller
{
    public function AgendaDesa()
    {
        $data = Agenda::latest()->get();

        // Logic for the agenda desa page
        return view('Admin.Agenda.Agendadesa', compact('data'));
    }
    public function tambahagendadesa()
    {

        return view('Admin.Agenda.tambahagenda');
    }
    public function insertkegiatan(Request $request)
    {
        $posterName = null;

    if ($request->hasFile('poster_agenda')) {
        $posterFile = $request->file('poster_agenda');
        $posterName = $posterFile->getClientOriginalName();
        $posterFile->move(public_path('AgendaDesa'), $posterName);
    }

    $data = Agenda::create([
        'nama_agenda' => $request->input('nama_agenda'),
        'tanggal_agenda' => $request->input('tanggal_agenda'),
        'waktu_agenda' => $request->input('waktu_agenda'),
        'lokasi_agenda' => $request->input('lokasi_agenda'),
        'deskripsi_agenda' => $request->input('deskripsi_agenda'),
        'poster_agenda' => $posterName // <- sudah diisi, tidak null
    ]);
        return redirect()->route('viewAgendaDesa')->with('success', 'Berhasil Di Tambahkan');
    }

public function editagenda($id)
    {
        $data = Agenda::findOrFail($id);
        return view('Admin.Agenda.editagenda',compact('data'));
    }

    public function updateagenda(Request $request, $id)
{

    // Ambil data lama
    $agenda = Agenda::findOrFail($id);

    // Simpan nama file lama sebagai default
    $posterName = $agenda->poster_agenda;

    // Jika ada file baru di-upload
    if ($request->hasFile('poster_agenda')) {
        $posterFile = $request->file('poster_agenda');
        $posterName = time() . '_' . $posterFile->getClientOriginalName();
        $posterFile->move(public_path('AgendaDesa'), $posterName);
    }

    // Update data agenda
    $agenda->update([
        'nama_agenda'     => $request->input('nama_agenda'),
        'tanggal_agenda'  => $request->input('tanggal_agenda'),
        'waktu_agenda'    => $request->input('waktu_agenda'),
        'lokasi_agenda'   => $request->input('lokasi_agenda'),
        'deskripsi_agenda'=> $request->input('deskripsi_agenda'),
        'poster_agenda'   => $posterName,
    ]);

    return redirect()->route('viewAgendaDesa')->with('success', 'Agenda berhasil diperbarui');
}
public function delete($id)
{
    $agenda = Agenda::findOrFail($id);

    // Hapus file foto jika ada
    if ($agenda->poster_agenda && file_exists(public_path('AgendaDesa/' . $agenda->poster_agenda))) {
        unlink(public_path('AgendaDesa/' . $agenda->poster_agenda));
    }

    $agenda->delete();
    return redirect()->route('viewAgendaDesa')->with('success', 'Agenda berhasil dihapus!');
}

}
