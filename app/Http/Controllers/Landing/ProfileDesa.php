<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\penduduk;

class ProfileDesa extends Controller
{
    public function ViewSejarahDesa()
    {
        return view("LandingPage.SejarahDesa");
    }

    public function ViewVisiMisi()
    {
        return view("LandingPage.VisiMisi");
    }

    public function ViewKelembagaan()
    {
        return view("LandingPage.Kelembagaan");
    }

    public function ViewLetakGeografis()
    {
        return view("LandingPage.LetakGeografis");
    }
    public function ViewDemografi()
    {
        //grafik filter umur dan jenis kelamin
        $ranges = [
            '0-4' => [0, 4],
            '5-9' => [5, 9],
            '10-14' => [10, 14],
            '15-19' => [15, 19],
            '20-24' => [20, 24],
            '25-29' => [25, 29],
            '30-34' => [30, 34],
            '35-39' => [35, 39],
            '40-44' => [40, 44],
            '45-49' => [45, 49],
            '50-54' => [50, 54],
            '55-59' => [55, 59],
            '60-64' => [60, 64],
            '65-69' => [65, 69],
            '70-74' => [70, 74],
            '75-79' => [75, 79],
            '80-84' => [80, 84],
            '85+'   => [85, 200],
        ];

        $labels = [];
        $male = [];
        $female = [];

        foreach ($ranges as $label => [$min, $max]) {
            $countMale = penduduk::where('jenis_kelamin', 'Laki-laki')
                ->whereBetween('umur', [$min, $max])
                ->count();

            $countFemale = penduduk::where('jenis_kelamin', 'Perempuan')
                ->whereBetween('umur', [$min, $max])
                ->count();
            $labels[] = $label;
            $male[] = -$countMale; // Biar muncul di kiri
            $female[] = $countFemale;
        }
        //grafik filter dusun
        $data = penduduk::select('dusun', DB::raw('count(*) as total'))
            ->groupBy('dusun')
            ->orderBy('dusun')
            ->get();

        $labelss = $data->pluck('dusun');
        $totals = $data->pluck('total');

        //grafik pendidikan
        $pendidikan = [
            'Tidak/Belum Sekolah' => Penduduk::where('pendidikan', 'Tidak/Belum Sekolah')->count(),
            'Belum Tamat SD' => Penduduk::where('pendidikan', 'Belum Tamat SD')->count(),
            'SD' => Penduduk::where('pendidikan', 'SD')->count(),
            'SMP' => Penduduk::where('pendidikan', 'SMP')->count(),
            'SMA' => Penduduk::where('pendidikan', 'SMA')->count(),
            'D1/D2' => Penduduk::whereIn('pendidikan', ['D1', 'D2'])->count(),
            'D3' => Penduduk::where('pendidikan', 'D3')->count(),
            'S1' => Penduduk::where('pendidikan', 'S1')->count(),
            'S2' => Penduduk::where('pendidikan', 'S2')->count(),
            'S3' => Penduduk::where('pendidikan', 'S3')->count(),
        ];

        $labelpendidikan = array_keys($pendidikan);
        $values = array_values($pendidikan);

        return view("LandingPage.demografi", compact('labels', 'male', 'female', 'labelss', 'totals', 'data', 'pendidikan', 'labelpendidikan', 'values'));
    }

    public function ViewKelembagaanDetail()
    {
        return view("LandingPage.detailkelembagaan");
    }

    public function ViewPotensiDesa()
    {
        return view("LandingPage.potensidesa");
    }
}
