<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerkuliahanC extends Controller
{
    public function index()
    {
         // Data tanpa database
        $daftar = [
            [
                'no' => 1,
                'hari' => 'Senin',
                'mata_kuliah' => 'NLP (Natural Language Processing',
                'jam' => '13.00 - 15.10',
                'sks' => 3,
                'dosen' => 'NA & FE'
            ],
            [
                'no' => 2,
                'hari' => 'Selasa',
                'mata_kuliah' => 'Interaksi Manusia dan Komputer',
                'jam' => '08.00 - 10.00',
                'sks' => 3,
                'dosen' => 'AD'
            ],
            [
                'no' => 3,
                'hari' => 'Selasa',
                'mata_kuliah' => 'Pengujuan Perangkat Lunak',
                'jam' => '10.00 - 12.00',
                'sks' => 3,
                'dosen' => 'NA'
            ],
            [
                'no' => 4,
                'hari' => 'Selasa',
                'mata_kuliah' => 'Data Warehouse',
                'jam' => '13.00 - 14.00',
                'sks' => 2,
                'dosen' => 'SD'
            ],
            [
                'no' => 5,
                'hari' => 'Rabu',
                'mata_kuliah' => 'Jaringan Switching dan Wireless',
                'jam' => '08.00 - 11.12',
                'sks' => 3,
                'dosen' => 'NV'
            ],
            [
                'no' => 6,
                'hari' => 'Rabu',
                'mata_kuliah' => 'Rekayasa Web',
                'jam' => '13.00 - 15.10',
                'sks' => 3,
                'dosen' => 'AR'
            ],
            [
                'no' => 7,
                'hari' => 'Kamis',
                'mata_kuliah' => 'Bahasa Inggris',
                'jam' => '10.00 - 11.40',
                'sks' => 2,
                'dosen' => 'MN'
            ],
            [
                'no' => 8,
                'hari' => 'Kamis',
                'mata_kuliah' => 'Tata Kelola Teknologi Informasi',
                'jam' => '13.00 - 14.40',
                'sks' => 2,
                'dosen' => 'FE'
            ],
            
        ];

        return view('daftarperkuliahan', compact('daftar'));
    }
}
