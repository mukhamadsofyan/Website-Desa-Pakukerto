<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class penduduk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penduduks')->insert([
            [
                'nama' => 'Ahmad Sofyan',
                'alamat' => 'Jl. Raya Pakukerto No. 1',
                'dusun' => 'Krajan',
                'pendidikan' => 'S1',
                'pekerjaan' => 'Programmer',
                'agama' => 'Islam',
                'jenis_kelamin' => 'Laki-laki',
                'status_perkawinan' => 'Belum Kawin',
                'umur' => 20,
            ],
             [
                'nama' => 'Ahmad Sofyan',
                'alamat' => 'Jl. Raya Pakukerto No. 1',
                'dusun' => 'Janti',
                'pendidikan' => 'S1',
                'pekerjaan' => 'Programmer',
                'agama' => 'Islam',
                'jenis_kelamin' => 'Laki-laki',
                'status_perkawinan' => 'Belum Kawin',
                'umur' => 20,
            ],
             [
                'nama' => 'Ahmad Sofyan',
                'alamat' => 'Jl. Raya Pakukerto No. 1',
                'dusun' => 'Janti',
                'pendidikan' => 'S1',
                'pekerjaan' => 'Programmer',
                'agama' => 'Islam',
                'jenis_kelamin' => 'Laki-laki',
                'status_perkawinan' => 'Belum Kawin',
                'umur' => 25,
            ],
             [
                'nama' => 'Ahmad Sofyan',
                'alamat' => 'Jl. Raya Pakukerto No. 1',
                'dusun' => 'Krajan',
                'pendidikan' => 'S1',
                'pekerjaan' => 'Programmer',
                'agama' => 'Islam',
                'jenis_kelamin' => 'Perempuan',
                'status_perkawinan' => 'Belum Kawin',
                'umur' => 20,
            ],
             [
                'nama' => 'Ahmad Sofyan',
                'alamat' => 'Jl. Raya Pakukerto No. 1',
                'dusun' => 'Krajan',
                'pendidikan' => 'S1',
                'pekerjaan' => 'Programmer',
                'agama' => 'Islam',
                'jenis_kelamin' => 'Laki-laki',
                'status_perkawinan' => 'Belum Kawin',
                'umur' => 10,
            ],
             [
                'nama' => 'Ahmad Sofyan',
                'alamat' => 'Jl. Raya Pakukerto No. 1',
                'dusun' => 'Gendol',
                'pendidikan' => 'S1',
                'pekerjaan' => 'Programmer',
                'agama' => 'Islam',
                'jenis_kelamin' => 'Laki-laki',
                'status_perkawinan' => 'Belum Kawin',
                'umur' => 15,
            ],

        ]);
    }
}
