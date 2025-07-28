<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\TemplateProcessor;
use Carbon\Carbon;
use App\Models\PermohonanSurat;
use Illuminate\Support\Facades\Validator;

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
            $templateProcessor->setValue('tgl_surat', Carbon::now()->translatedFormat('d F Y'));

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


    public function submitKematian(Request $request)
    {
        try {
            // Validasi manual agar bisa dd error jika gagal
            $validator = Validator::make($request->all(), [
                'nama_pelapor'       => 'required|string|max:255',
                'nik_pelapor'        => 'required|string',
                'alamat_pelapor'     => 'required|string|max:255',
                'status_pelapor'     => 'required|string|max:255',
                'nama_alm'           => 'required|string|max:255',
                'nik_alm'            => 'nullable|string',
                'kk_alm'             => 'nullable|string',
                'ttl_alm'            => 'required|string|max:255',
                'jenis_kelamin'      => 'required|string|max:20',
                'agama'              => 'required|string|max:50',
                'status_perkawinan'  => 'required|string|max:50',
                'pekerjaan'          => 'nullable|string|max:100',
                'alamat_alm'         => 'required|string|max:255',
                'tanggal_meninggal'  => 'required|date',
                'tempat_kematian'    => 'required|string|max:255',
                'sebab_kematian'     => 'required|string|max:255',
                'keperluan'          => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                dd($validator->errors()); // Debug hanya saat gagal validasi
            }

            $validatedData = $validator->validated();

            // Cek apakah template tersedia
            $templateFileName = 'SURAT KETERANGAN KEMATIAN.docx';
            $templatePath = storage_path('app/templates/' . $templateFileName);

            if (!file_exists($templatePath)) {
                return back()->withErrors(['template' => 'Template surat tidak ditemukan!']);
            }

            // Load dan isi template
            $templateProcessor = new TemplateProcessor($templatePath);
            $templateProcessor->setValue('nama_pelapor', $validatedData['nama_pelapor']);
            $templateProcessor->setValue('nik_pelapor', $validatedData['nik_pelapor']);
            $templateProcessor->setValue('alamat_pelapor', $validatedData['alamat_pelapor']);
            $templateProcessor->setValue('status_pelapor', $validatedData['status_pelapor']);
            $templateProcessor->setValue('nama_alm', $validatedData['nama_alm']);
            $templateProcessor->setValue('nik_alm', $validatedData['nik_alm'] ?? '-');
            $templateProcessor->setValue('kk_alm', $validatedData['kk_alm'] ?? '-');
            $templateProcessor->setValue('ttl_alm', $validatedData['ttl_alm']);
            $templateProcessor->setValue('jenis_kelamin', $validatedData['jenis_kelamin']);
            $templateProcessor->setValue('agama', $validatedData['agama']);
            $templateProcessor->setValue('status_perkawinan', $validatedData['status_perkawinan']);
            $templateProcessor->setValue('pekerjaan', $validatedData['pekerjaan'] ?? '-');
            $templateProcessor->setValue('alamat_alm', $validatedData['alamat_alm']);
            $templateProcessor->setValue('tanggal_meninggal', Carbon::parse($validatedData['tanggal_meninggal'])->translatedFormat('l, d F Y'));
            $templateProcessor->setValue('tempat_kematian', $validatedData['tempat_kematian']);
            $templateProcessor->setValue('sebab_kematian', $validatedData['sebab_kematian']);
            $templateProcessor->setValue('keperluan', $validatedData['keperluan']);
            $templateProcessor->setValue('tgl_surat', Carbon::now()->translatedFormat('d F Y'));

            // Simpan file surat
            $outputFileName = 'Surat_Kematian_' . time() . '.docx';
            $savePath = storage_path('app/public/surat/' . $outputFileName);

            if (!file_exists(dirname($savePath))) {
                mkdir(dirname($savePath), 0775, true);
            }

            $templateProcessor->saveAs($savePath);

            // Simpan data ke database
            PermohonanSurat::create([
                'nama_lengkap' => $validatedData['nama_alm'],
                'nik'          => $validatedData['nik_alm'],
                'jenis_surat'  => 'Kematian',
                'file_surat'   => 'surat/' . $outputFileName,
                'data_lainnya' => json_encode([
                    'pelapor' => [
                        'nama'   => $validatedData['nama_pelapor'],
                        'nik'    => $validatedData['nik_pelapor'],
                        'alamat' => $validatedData['alamat_pelapor'],
                        'status' => $validatedData['status_pelapor'],
                    ],
                    'kk_alm'            => $validatedData['kk_alm'],
                    'ttl_alm'           => $validatedData['ttl_alm'],
                    'jenis_kelamin'     => $validatedData['jenis_kelamin'],
                    'agama'             => $validatedData['agama'],
                    'status_perkawinan' => $validatedData['status_perkawinan'],
                    'pekerjaan'         => $validatedData['pekerjaan'],
                    'alamat_alm'        => $validatedData['alamat_alm'],
                    'tanggal_meninggal' => $validatedData['tanggal_meninggal'],
                    'tempat_kematian'   => $validatedData['tempat_kematian'],
                    'sebab_kematian'    => $validatedData['sebab_kematian'],
                    'keperluan'         => $validatedData['keperluan'],
                ]),
            ]);

            return redirect()->back()->with('success', 'Permohonan Surat Keterangan Kematian berhasil dikirim.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function submitKelahiran(Request $request)
    {
        // dd($request->all()); // Debugging untuk melihat data yang dikirim
        $validatedData = $request->validate([
            'nama_anak'       => 'required|string|max:255',
            'anak_ke'         => 'required|string|max:255',
            'ttl_anak'        => 'required|string|max:255',
            'alamat_anak'     => 'required|string|max:255',
            'penolong'        => 'nullable|string|max:255',
            'alamat_penolong' => 'nullable|string|max:255',

            'nik_ibu'         => 'required|string|max:255',
            'nama_ibu'        => 'required|string|max:255',
            'ttl_ibu'         => 'required|string|max:255',
            'alamat_ibu'      => 'required|string|max:255',

            'nik_ayah'        => 'required|string|max:255',
            'nama_ayah'       => 'required|string|max:255',
            'ttl_ayah'        => 'required|string|max:255',
            'alamat_ayah'     => 'required|string|max:255',

            'keperluan'       => 'required|string|max:255',
        ]);

        // Path template surat kelahiran
        $templateFile = 'SURAT KETERANGAN KELAHIRAN.docx';
        $templatePath = storage_path('app/templates/' . $templateFile);

        if (!file_exists($templatePath)) {
            return back()->withErrors(['template' => 'Template surat tidak ditemukan!']);
        }

        try {
            $templateProcessor = new TemplateProcessor($templatePath);

            // Set value ke template
            $templateProcessor->setValue('nama_anak', $validatedData['nama_anak']);
            $templateProcessor->setValue('anak_ke', $validatedData['anak_ke']);
            $templateProcessor->setValue('ttl_anak', $validatedData['ttl_anak']);
            $templateProcessor->setValue('alamat_anak', $validatedData['alamat_anak']);
            $templateProcessor->setValue('penolong', $validatedData['penolong'] ?? '-');
            $templateProcessor->setValue('alamat_penolong', $validatedData['alamat_penolong'] ?? '-');

            $templateProcessor->setValue('nik_ibu', $validatedData['nik_ibu']);
            $templateProcessor->setValue('nama_ibu', $validatedData['nama_ibu']);
            $templateProcessor->setValue('ttl_ibu', $validatedData['ttl_ibu']);
            $templateProcessor->setValue('alamat_ibu', $validatedData['alamat_ibu']);

            $templateProcessor->setValue('nik_ayah', $validatedData['nik_ayah']);
            $templateProcessor->setValue('nama_ayah', $validatedData['nama_ayah']);
            $templateProcessor->setValue('ttl_ayah', $validatedData['ttl_ayah']);
            $templateProcessor->setValue('alamat_ayah', $validatedData['alamat_ayah']);

            $templateProcessor->setValue('keperluan', $validatedData['keperluan']);
            $templateProcessor->setValue('tgl_surat', Carbon::now()->translatedFormat('d F Y'));

            // Simpan file surat
            $outputFileName = 'Surat_Kelahiran_' . time() . '.docx';
            $savePath = storage_path('app/public/surat/' . $outputFileName);

            if (!file_exists(dirname($savePath))) {
                mkdir(dirname($savePath), 0775, true);
            }

            $templateProcessor->saveAs($savePath);

            // Simpan ke database
            PermohonanSurat::create([
                'nama_lengkap' => $validatedData['nama_anak'],
                'nik'          => $validatedData['nik_ibu'], // atau bisa juga nik ayah
                'jenis_surat'  => 'Surat Keterangan Kelahiran',
                'file_surat'   => 'surat/' . $outputFileName,
                'data_lainnya' => json_encode($validatedData),
            ]);

            return redirect()->back()->with('success', 'Permohonan Surat Kelahiran berhasil dikirim!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat membuat surat: ' . $e->getMessage()]);
        }
    }

    public function submitKeramaian(Request $request)
    {
        // Validasi input user
        $validatedData = $request->validate([
            'nama_lengkap'     => 'required|string|max:255',
            'tempat_lahir'     => 'required|string|max:255',
            'tanggal_lahir'    => 'required|date',
            'jenis_kelamin'    => 'required|string|max:20',
            'agama'            => 'required|string|max:50',
            'nik'              => 'required|string|max:20',
            'alamat_lengkap'   => 'required|string|max:255',
            'no_hp'            => 'required|string|max:20',
            'hari_acara'       => 'required|string|max:50',
            'tanggal_acara'    => 'required|date',
            'jam_acara'        => 'required|string|max:50',
            'jenis_keramaian'  => 'required|string|max:100',
            'keperluan'        => 'required|string|max:255',
            'lokasi_acara'     => 'required|string|max:255',
        ]);

        // Cek template Word
        $templateDocxFileName = 'SURAT PERMOHONAN IZIN KERAMAIAN.docx';
        $templateDocxPath = storage_path('app/templates/' . $templateDocxFileName);

        if (!file_exists($templateDocxPath)) {
            return back()->withErrors(['template' => 'Template surat tidak ditemukan!']);
        }

        try {
            // Format TTL
            $ttl = $validatedData['tempat_lahir'] . ', ' . Carbon::parse($validatedData['tanggal_lahir'])->translatedFormat('d F Y');

            // Proses isi template
            $templateProcessor = new TemplateProcessor($templateDocxPath);
            $templateProcessor->setValue('nama', $validatedData['nama_lengkap']);
            $templateProcessor->setValue('ttl', $ttl);
            $templateProcessor->setValue('jenis_kelamin', $validatedData['jenis_kelamin']);
            $templateProcessor->setValue('agama', $validatedData['agama']);
            $templateProcessor->setValue('nik', $validatedData['nik']);
            $templateProcessor->setValue('alamat', $validatedData['alamat_lengkap']);
            $templateProcessor->setValue('no_hp', $validatedData['no_hp']);
            $templateProcessor->setValue('hari_acara', $validatedData['hari_acara']);
            $templateProcessor->setValue('tanggal_acara', Carbon::parse($validatedData['tanggal_acara'])->translatedFormat('d F Y'));
            $templateProcessor->setValue('jam_acara', $validatedData['jam_acara']);
            $templateProcessor->setValue('jenis_keramaian', $validatedData['jenis_keramaian']);
            $templateProcessor->setValue('keperluan', $validatedData['keperluan']);
            $templateProcessor->setValue('lokasi_acara', $validatedData['lokasi_acara']);
            $templateProcessor->setValue('tanggal', Carbon::now()->translatedFormat('d F Y'));
            $templateProcessor->setValue('tgl_surat', Carbon::now()->translatedFormat('d F Y'));

            // Simpan file ke storage
            $outputFileName = 'Surat_Keramaian_' . time() . '.docx';
            $savePath = storage_path('app/public/surat/' . $outputFileName);

            if (!file_exists(dirname($savePath))) {
                mkdir(dirname($savePath), 0775, true);
            }

            $templateProcessor->saveAs($savePath);

            // Simpan ke database
            PermohonanSurat::create([
                'nama_lengkap'  => $validatedData['nama_lengkap'],
                'nik'           => $validatedData['nik'],
                'jenis_surat'   => 'Izin Keramaian',
                'file_surat'    => 'surat/' . $outputFileName,
                'data_lainnya'  => json_encode([
                    'tempat_lahir'    => $validatedData['tempat_lahir'],
                    'tanggal_lahir'   => $validatedData['tanggal_lahir'],
                    'jenis_kelamin'   => $validatedData['jenis_kelamin'],
                    'agama'           => $validatedData['agama'],
                    'alamat_lengkap'  => $validatedData['alamat_lengkap'],
                    'no_hp'           => $validatedData['no_hp'],
                    'hari_acara'      => $validatedData['hari_acara'],
                    'tanggal_acara'   => $validatedData['tanggal_acara'],
                    'jam_acara'       => $validatedData['jam_acara'],
                    'jenis_keramaian' => $validatedData['jenis_keramaian'],
                    'keperluan'       => $validatedData['keperluan'],
                    'lokasi_acara'    => $validatedData['lokasi_acara'],
                ]),
            ]);

            return redirect()->back()->with('success', 'Permohonan surat izin keramaian berhasil dikirim. Silakan tunggu konfirmasi dari admin.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat membuat surat: ' . $e->getMessage()]);
        }
    }
}
