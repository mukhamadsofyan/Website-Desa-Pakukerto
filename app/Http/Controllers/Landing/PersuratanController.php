<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;
use Carbon\Carbon;
use App\Models\PermohonanSurat;

class PersuratanController extends Controller
{
    public function viewpersuratan()
    {
        return view("LandingPage.persuratan");
    }

    public function submitSkck(Request $request)
    {
        // Validasi input user
        $validatedData = $request->validate([
            'nama_lengkap'       => 'required|string|max:255',
            'tempat_lahir'       => 'required|string|max:255',
            'tanggal_lahir'      => 'required|date',
            'agama'              => 'required|string|max:255',
            'nik'                => 'required|string',
            'status_perkawinan'  => 'required|string|max:255',
            'pekerjaan'          => 'required|string|max:255',
            'pendidikan'         => 'required|string|max:255',
            'alamat_lengkap'     => 'required|string|max:255',
        ]);

        // Cek template Word
        $templateDocxFileName = 'SURAT PENGANTAR PERMOHONAN SKCK.docx';
        $templateDocxPath = storage_path('app/templates/' . $templateDocxFileName);

        if (!file_exists($templateDocxPath)) {
            return back()->withErrors(['template' => 'Template surat tidak ditemukan!']);
        }

        try {
            // Proses isi template
            $templateProcessor = new TemplateProcessor($templateDocxPath);
            $templateProcessor->setValue('Nama', $validatedData['nama_lengkap']);
            $templateProcessor->setValue('Tempat/Tgl.Lahir', $validatedData['tempat_lahir'] . ', ' . Carbon::parse($validatedData['tanggal_lahir'])->translatedFormat('d F Y'));
            $templateProcessor->setValue('Agama', $validatedData['agama']);
            $templateProcessor->setValue('NIK', $validatedData['nik']);
            $templateProcessor->setValue('Status Perkawinan', $validatedData['status_perkawinan']);
            $templateProcessor->setValue('Pekerjaan', $validatedData['pekerjaan']);
            $templateProcessor->setValue('Pendidikan', $validatedData['pendidikan']);
            $templateProcessor->setValue('Alamat', $validatedData['alamat_lengkap']);
            $templateProcessor->setValue('tanggal', Carbon::now()->translatedFormat('d F Y'));

            // Simpan file ke storage/app/public/surat
            $outputFileName = 'Surat_SKCK_' . time() . '.docx';
            $savePath = storage_path('app/public/surat/' . $outputFileName);

            if (!file_exists(dirname($savePath))) {
                mkdir(dirname($savePath), 0775, true);
            }

            $templateProcessor->saveAs($savePath);

            // Simpan ke database
            PermohonanSurat::create([
                'nama_lengkap'  => $validatedData['nama_lengkap'],
                'nik'           => $validatedData['nik'],
                'jenis_surat'   => 'SKCK',
                'file_surat'    => 'surat/' . $outputFileName,
                'data_lainnya'  => json_encode([
                    'tempat_lahir'      => $validatedData['tempat_lahir'],
                    'tanggal_lahir'     => $validatedData['tanggal_lahir'],
                    'agama'             => $validatedData['agama'],
                    'status_perkawinan' => $validatedData['status_perkawinan'],
                    'pekerjaan'         => $validatedData['pekerjaan'],
                    'pendidikan'        => $validatedData['pendidikan'],
                    'alamat_lengkap'    => $validatedData['alamat_lengkap'],
                ]),
            ]);

            return redirect()->back()->with('success', 'Permohonan SKCK berhasil dikirim. Silakan tunggu konfirmasi dari admin.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat membuat surat: ' . $e->getMessage()]);
        }
    }
}
