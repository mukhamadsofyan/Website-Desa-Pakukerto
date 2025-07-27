<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PermohonanSurat;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class Persuratan extends Controller
{
    public function viewSurat()
    {
        $permohonan = PermohonanSurat::latest()->get();
        // dd($permohonan);
        return view('Admin.persuratan.viewPersuratan', compact('permohonan'));
    }

    public function destroy($id)
    {
        $data = PermohonanSurat::findOrFail($id);

        // Hapus file fisik jika ada
        if ($data->file_surat && Storage::exists($data->file_surat)) {
            Storage::delete($data->file_surat);
        }

        $data->delete();

        return redirect()->back()->with('success', 'Data permohonan berhasil dihapus.');
    }
}
