<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class agenda extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agendas')->insert([
            'nama_agenda' => 'Kerja Bakti Bersama Warga Dusun Kemiri',
            'tanggal_agenda' => '10 Juli 2025',
            'waktu_agenda' => '09.00',
            'deskripsi_agenda' => 'Dalam semangat kebersamaan dan kepedulian terhadap lingkungan, Pemerintah Desa Pakukerto mengajak seluruh warga Dusun Kemiri untuk turut serta dalam kegiatan Kerja Bakti Bersama pada Rabu, 30 Juli 2025, mulai pukul 09.00 WIB di depan SDN 2 Pakukerto. Kegiatan ini bertujuan menciptakan lingkungan yang bersih, sehat, dan nyaman, dengan fokus utama pada pembersihan area publik, seperti jalan desa, saluran air, dan sekitar sekolah. Selain itu, warga juga akan diberi edukasi tentang pemilahan sampah, pentingnya daur ulang, serta pengurangan penggunaan plastik sekali pakai.

            Dalam aksi ini, setiap peserta akan dilengkapi dengan perlengkapan kebersihan dan diberikan informasi mengenai pengelolaan sampah rumah tangga yang ramah lingkungan. Kerja bakti ini menjadi momentum untuk membangun kesadaran kolektif bahwa menjaga kebersihan adalah tanggung jawab bersama. Mari bersama-sama kita wujudkan Dusun Kemiri yang lebih hijau, sehat, dan nyaman untuk generasi sekarang dan yang akan datang.',
            'lokasi_agenda' => 'SDN 2 Pakukerto',
            'poster_agenda' => 'pelatihan.png',
        ]);
        DB::table('agendas')->insert([
            'nama_agenda' => 'Bazar Produk UMKM & Hasil Tani',
            'tanggal_agenda' => '17 Agustus 2025',
            'waktu_agenda' => '10.15',
            'deskripsi_agenda' => 'Dalam semangat kebersamaan dan kepedulian terhadap lingkungan, Pemerintah Desa Pakukerto mengajak seluruh warga Dusun Kemiri untuk turut serta dalam kegiatan Kerja Bakti Bersama pada Rabu, 30 Juli 2025, mulai pukul 09.00 WIB di depan SDN 2 Pakukerto. Kegiatan ini bertujuan menciptakan lingkungan yang bersih, sehat, dan nyaman, dengan fokus utama pada pembersihan area publik, seperti jalan desa, saluran air, dan sekitar sekolah. Selain itu, warga juga akan diberi edukasi tentang pemilahan sampah, pentingnya daur ulang, serta pengurangan penggunaan plastik sekali pakai.

            Dalam aksi ini, setiap peserta akan dilengkapi dengan perlengkapan kebersihan dan diberikan informasi mengenai pengelolaan sampah rumah tangga yang ramah lingkungan. Kerja bakti ini menjadi momentum untuk membangun kesadaran kolektif bahwa menjaga kebersihan adalah tanggung jawab bersama. Mari bersama-sama kita wujudkan Dusun Kemiri yang lebih hijau, sehat, dan nyaman untuk generasi sekarang dan yang akan datang.',
            'lokasi_agenda' => 'Pasar Desa Pakukerto',
            'poster_agenda' => '5',
        ]);
        DB::table('agendas')->insert([
            'nama_agenda' => 'Upacara Memperingati HUT 80 RI',
            'tanggal_agenda' => '10 Juli 2025',
            'waktu_agenda' => '09.00',
            'deskripsi_agenda' => 'Dalam semangat kebersamaan dan kepedulian terhadap lingkungan, Pemerintah Desa Pakukerto mengajak seluruh warga Dusun Kemiri untuk turut serta dalam kegiatan Kerja Bakti Bersama pada Rabu, 30 Juli 2025, mulai pukul 09.00 WIB di depan SDN 2 Pakukerto. Kegiatan ini bertujuan menciptakan lingkungan yang bersih, sehat, dan nyaman, dengan fokus utama pada pembersihan area publik, seperti jalan desa, saluran air, dan sekitar sekolah. Selain itu, warga juga akan diberi edukasi tentang pemilahan sampah, pentingnya daur ulang, serta pengurangan penggunaan plastik sekali pakai.

            Dalam aksi ini, setiap peserta akan dilengkapi dengan perlengkapan kebersihan dan diberikan informasi mengenai pengelolaan sampah rumah tangga yang ramah lingkungan. Kerja bakti ini menjadi momentum untuk membangun kesadaran kolektif bahwa menjaga kebersihan adalah tanggung jawab bersama. Mari bersama-sama kita wujudkan Dusun Kemiri yang lebih hijau, sehat, dan nyaman untuk generasi sekarang dan yang akan datang.',
            'lokasi_agenda' => 'SDN 2 Pakukerto',
            'poster_agenda' => '5',
        ]);
    }
}
