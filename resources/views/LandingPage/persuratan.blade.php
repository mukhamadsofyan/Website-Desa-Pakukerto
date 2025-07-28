<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<!-- Mirrored from htmldesigntemplates.com/html/epathsala/course-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Jul 2025 15:38:28 GMT -->
@include('LandingPage.Layout.head')

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- header starts -->
    @include('LandingPage.Layout.header')z
    <!-- header ends -->

    <!-- Course Detail start -->
    <section class="course-detail shape_big2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="course-content">
                        <div class="cs-contents">
                            <div class="cs-title">
                                <h3>Persuratan</h3>
                            </div>
                            <div class="accordion md-accordion" id="accordionPersuratan" role="tablist"
                                aria-multiselectable="true">
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingPersurat1">
                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionPersuratan"
                                            href="#collapsePersurat1" aria-expanded="false"
                                            aria-controls="collapsePersurat1">
                                            <h5 class="mb-0">SURAT PENGANTAR PERMOHONAN SKCK<i
                                                    class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapsePersurat1" class="collapse" role="tabpanel"
                                        aria-labelledby="headingPersurat1" data-parent="#accordionPersuratan">
                                        <div class="card-body">
                                            <form class="mt-4" action="{{ route('submit.skck') }}" method="POST">
                                                @csrf
                                                <div class="row mb-3">
                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-outline">
                                                            <label for="inputNama">Nama</label>
                                                            <input type="text" id="inputNama" name="nama_lengkap"
                                                                class="form-control form-shadow"
                                                                placeholder="Masukkan nama lengkap">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-outline">
                                                            <label for="inputTempatLahir">Tempat Lahir</label>
                                                            <input type="text" id="inputTempatLahir"
                                                                name="tempat_lahir" class="form-control form-shadow"
                                                                placeholder="Contoh: Jakarta">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-outline">
                                                            <label for="inputTanggalLahir">Tanggal Lahir</label>
                                                            <input type="date" id="inputTanggalLahir"
                                                                name="tanggal_lahir" class="form-control form-shadow">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-outline">
                                                            <label for="inputAgama">Agama</label>
                                                            <input type="text" id="inputAgama" name="agama"
                                                                class="form-control form-shadow"
                                                                placeholder="Contoh: Islam">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-outline">
                                                            <label for="inputNIK">NIK</label>
                                                            <input type="number" id="inputNIK" name="nik"
                                                                class="form-control form-shadow"
                                                                placeholder="Masukkan NIK">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-outline">
                                                            <label for="inputStatus">Status Perkawinan</label>
                                                            <select id="inputStatus" name="status_perkawinan"
                                                                class="form-control form-shadow">
                                                                <option value="" disabled selected>Pilih status
                                                                </option>
                                                                <option>Belum Kawin</option>
                                                                <option>Kawin</option>
                                                                <option>Cerai Hidup</option>
                                                                <option>Cerai Mati</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-outline">
                                                            <label for="inputPekerjaan">Pekerjaan</label>
                                                            <input type="text" id="inputPekerjaan" name="pekerjaan"
                                                                class="form-control form-shadow"
                                                                placeholder="Contoh: Karyawan Swasta">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <div class="form-outline">
                                                            <label for="inputPendidikan">Pendidikan Terakhir</label>
                                                            <select id="inputPendidikan" name="pendidikan"
                                                                class="form-control form-shadow">
                                                                <option value="" disabled selected>Pilih
                                                                    pendidikan</option>
                                                                <option>SD</option>
                                                                <option>SMP</option>
                                                                <option>SMA/SMK</option>
                                                                <option>D1/D2/D3</option>
                                                                <option>S1</option>
                                                                <option>S2</option>
                                                                <option>S3</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12 mb-3">
                                                        <div class="form-outline">
                                                            <label for="inputAlamat">Alamat</label>
                                                            <textarea id="inputAlamat" name="alamat_lengkap" class="form-control form-shadow" rows="3"
                                                                placeholder="Masukkan alamat lengkap"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-surat px-5 py-2 mt-3 shadow-sm">
                                                            Ajukan Permohonan
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingPersurat2">
                                        <a class="collapsed" data-toggle="collapse"
                                            data-parent="#accordionPersuratan" href="#collapsePersurat2"
                                            aria-expanded="false" aria-controls="collapsePersurat2">
                                            <h5 class="mb-0">SURAT PERMOHONAN IZIN KERAMAIAN<i
                                                    class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapsePersurat2" class="collapse" role="tabpanel"
                                        aria-labelledby="headingPersurat2" data-parent="#accordionPersuratan">
                                        <div class="card-body">
                                            <form class="mt-4" action="{{ route('submit.keramaian') }}"
                                                method="POST">
                                                @csrf
                                                <div class="row mb-3">
                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputNama">Nama Lengkap</label>
                                                        <input type="text" id="inputNama" name="nama_lengkap"
                                                            class="form-control form-shadow"
                                                            placeholder="Masukkan nama lengkap" required>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputTempatLahir">Tempat Lahir</label>
                                                        <input type="text" id="inputTempatLahir"
                                                            name="tempat_lahir" class="form-control form-shadow"
                                                            placeholder="Contoh: Surabaya" required>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputTanggalLahir">Tanggal Lahir</label>
                                                        <input type="date" id="inputTanggalLahir"
                                                            name="tanggal_lahir" class="form-control form-shadow"
                                                            required>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputJenisKelamin">Jenis Kelamin</label>
                                                        <select id="inputJenisKelamin" name="jenis_kelamin"
                                                            class="form-control form-shadow" required>
                                                            <option value="" disabled selected>Pilih jenis
                                                                kelamin</option>
                                                            <option>Laki-laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputAgama">Agama</label>
                                                        <input type="text" id="inputAgama" name="agama"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Islam" required>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputNIK">NIK</label>
                                                        <input type="text" id="inputNIK" name="nik"
                                                            class="form-control form-shadow"
                                                            placeholder="Masukkan NIK" required>
                                                    </div>

                                                    <div class="col-lg-12 mb-3">
                                                        <label for="inputAlamat">Alamat Lengkap</label>
                                                        <textarea id="inputAlamat" name="alamat_lengkap" class="form-control form-shadow" rows="3"
                                                            placeholder="Masukkan alamat lengkap" required></textarea>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputNoHP">No HP</label>
                                                        <input type="text" id="inputNoHP" name="no_hp"
                                                            class="form-control form-shadow"
                                                            placeholder="08xxxxxxxxxx" required>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputHariAcara">Hari Acara</label>
                                                        <input type="text" id="inputHariAcara" name="hari_acara"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Minggu" required>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputTanggalAcara">Tanggal Acara</label>
                                                        <input type="date" id="inputTanggalAcara"
                                                            name="tanggal_acara" class="form-control form-shadow"
                                                            required>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputJamAcara">Jam Acara</label>
                                                        <input type="text" id="inputJamAcara" name="jam_acara"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: 19.00 WIB - Selesai" required>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputJenisKeramaian">Jenis Keramaian</label>
                                                        <input type="text" id="inputJenisKeramaian"
                                                            name="jenis_keramaian" class="form-control form-shadow"
                                                            placeholder="Contoh: Dangdutan, Pengajian" required>
                                                    </div>

                                                    <div class="col-lg-6 mb-3">
                                                        <label for="inputKeperluan">Keperluan</label>
                                                        <input type="text" id="inputKeperluan" name="keperluan"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Ulang Tahun, Hajatan" required>
                                                    </div>

                                                    <div class="col-lg-12 mb-3">
                                                        <label for="inputLokasiAcara">Lokasi Acara</label>
                                                        <textarea id="inputLokasiAcara" name="lokasi_acara" class="form-control form-shadow" rows="2"
                                                            placeholder="Masukkan lokasi lengkap acara" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-surat px-5 py-2 mt-3 shadow-sm">
                                                            Ajukan Permohonan
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingPersurat3">
                                        <a class="collapsed" data-toggle="collapse"
                                            data-parent="#accordionPersuratan" href="#collapsePersurat3"
                                            aria-expanded="false" aria-controls="collapsePersurat3">
                                            <h5 class="mb-0">SURAT KETERANGAN KELAHIRAN<i class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapsePersurat3" class="collapse" role="tabpanel"
                                        aria-labelledby="headingPersurat3" data-parent="#accordionPersuratan">
                                        <div class="card-body">
                                            <form action="{{ route('submit.kelahiran') }}" method="POST"
                                                class="mt-4">
                                                @csrf

                                                <h5 class="mb-3">Data Anak</h5>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="nama_anak">Nama Lengkap Anak *</label>
                                                        <input type="text" name="nama_anak"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: AKHMAD IQBAL HAKIM">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="anak_ke">Anak ke *</label>
                                                        <input type="text" name="anak_ke"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: 1 (Satu)">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="ttl_anak">Tempat/Tanggal Lahir Anak *</label>
                                                        <input type="text" name="ttl_anak"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: Pasuruan, 23/08/2023">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="alamat_anak">Alamat Anak *</label>
                                                        <input type="text" name="alamat_anak"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: Dusun Gendol RT 003 RW 004 Desa Pakukerto">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="penolong">Penolong Kelahiran</label>
                                                        <input type="text" name="penolong"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Bidan Sri Wahyuni / - jika tidak ada">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="alamat_penolong">Alamat Penolong</label>
                                                        <input type="text" name="alamat_penolong"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Dusun Krajan RT 001 RW 001 Desa Pakukerto">
                                                    </div>
                                                </div>

                                                <hr class="my-4">
                                                <h5 class="mb-3">Data Ibu</h5>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="nik_ibu">NIK Ibu *</label>
                                                        <input type="text" name="nik_ibu"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: 3514094312020004">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="nama_ibu">Nama Ibu *</label>
                                                        <input type="text" name="nama_ibu"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: RINA JULIATI">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="ttl_ibu">Tempat/Tanggal Lahir Ibu *</label>
                                                        <input type="text" name="ttl_ibu"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: Pasuruan, 03/12/2002">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="alamat_ibu">Alamat Ibu *</label>
                                                        <input type="text" name="alamat_ibu"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: Dusun Gendol RT 003 RW 004 Desa Pakukerto">
                                                    </div>
                                                </div>

                                                <hr class="my-4">
                                                <h5 class="mb-3">Data Ayah</h5>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="nik_ayah">NIK Ayah *</label>
                                                        <input type="text" name="nik_ayah"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: 3514090808000002">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="nama_ayah">Nama Ayah *</label>
                                                        <input type="text" name="nama_ayah"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: AHMAD RIFA’I">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="ttl_ayah">Tempat/Tanggal Lahir Ayah *</label>
                                                        <input type="text" name="ttl_ayah"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: Pasuruan, 15/01/2000">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="alamat_ayah">Alamat Ayah *</label>
                                                        <input type="text" name="alamat_ayah"
                                                            class="form-control form-shadow" required
                                                            placeholder="Contoh: Dusun Gendol RT 001 RW 004 Desa Pakukerto">
                                                    </div>
                                                </div>

                                                <hr class="my-4">
                                                <div class="form-outline mb-4">
                                                    <label for="keperluan">Keperluan *</label>
                                                    <textarea name="keperluan" class="form-control form-shadow" rows="3" required
                                                        placeholder="Contoh: Untuk pengurusan administrasi kependudukan ke Disdukcapil."></textarea>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary btn-surat">Ajukan
                                                        Permohonan</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingPersurat4">
                                        <a class="collapsed" data-toggle="collapse"
                                            data-parent="#accordionPersuratan" href="#collapsePersurat4"
                                            aria-expanded="false" aria-controls="collapsePersurat4">
                                            <h5 class="mb-0">SURAT KETERANGAN KEMATIAN<i class="fas fa-plus"></i>
                                            </h5>
                                        </a>
                                    </div>
                                    <div id="collapsePersurat4" class="collapse" role="tabpanel"
                                        aria-labelledby="headingPersurat4" data-parent="#accordionPersuratan">
                                        <div class="card-body">
                                            <form class="mt-4" action="{{ route('submit.kematian') }}"
                                                method="POST">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="nama_pelapor">Nama Pelapor</label>
                                                        <input type="text" name="nama_pelapor"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Tuti Hidayati">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="nik_pelapor">NIK Pelapor</label>
                                                        <input type="text" name="nik_pelapor"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: 3514xxxxxxxxxxxx">
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="alamat_pelapor">Alamat Pelapor</label>
                                                        <input type="text" name="alamat_pelapor"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Dusun Gendol RT 01 RW 06 Desa Pakukerto">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="status_pelapor">Status Pelapor</label>
                                                        <input type="text" name="status_pelapor"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Cucu Kandung">
                                                    </div>

                                                    <div class="col-lg-6 mt-3">
                                                        <label for="nama_alm">Nama Almarhum</label>
                                                        <input type="text" name="nama_alm"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Noro Watini">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="nik_alm">NIK Almarhum</label>
                                                        <input type="text" name="nik_alm"
                                                            class="form-control form-shadow" placeholder="Contoh: -">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="kk_alm">No. KK Almarhum</label>
                                                        <input type="text" name="kk_alm"
                                                            class="form-control form-shadow" placeholder="Contoh: -">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="ttl_alm">Tempat, Tanggal Lahir</label>
                                                        <input type="text" name="ttl_alm"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Pasuruan, 10 Maret 1955">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                                        <select name="jenis_kelamin" class="form-control form-shadow">
                                                            <option value="">Pilih</option>
                                                            <option value="Laki-Laki">Laki-Laki</option>
                                                            <option value="Perempuan">Perempuan</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="agama">Agama</label>
                                                        <input type="text" name="agama"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Islam">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="status_perkawinan">Status Perkawinan</label>
                                                        <input type="text" name="status_perkawinan"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Kawin">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="pekerjaan">Pekerjaan</label>
                                                        <input type="text" name="pekerjaan"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Petani / -">
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="alamat_alm">Alamat Almarhum</label>
                                                        <input type="text" name="alamat_alm"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Dusun Gendol RT 001 RW 006 Desa Pakukerto">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="tanggal_meninggal">Hari/Tanggal Meninggal</label>
                                                        <input type="date" name="tanggal_meninggal"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Rabu, 10 Maret 1993">
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <label for="tempat_kematian">Tempat Kematian</label>
                                                        <input type="text" name="tempat_kematian"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Rumah / Rumah Sakit">
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="sebab_kematian">Sebab Kematian</label>
                                                        <input type="text" name="sebab_kematian"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Sakit / Kecelakaan">
                                                    </div>
                                                    <div class="col-lg-12 mt-3">
                                                        <label for="keperluan">Keperluan Surat</label>
                                                        <input type="text" name="keperluan"
                                                            class="form-control form-shadow"
                                                            placeholder="Contoh: Pengurusan Warisan / Tanah">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-surat px-5 py-2 mt-3 shadow-sm">
                                                            Ajukan Permohonan
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
    </section>
    <!-- Courses Detail end -->

    <!-- Footer starts -->
    @include('LandingPage.Layout.footer')
    <!-- Footer ends -->
    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->
    <!-- *Scripts* -->
    @include('LandingPage.Layout.script')
</body>

</html>
