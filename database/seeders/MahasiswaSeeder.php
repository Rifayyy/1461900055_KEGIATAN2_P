<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1 = new Mahasiswa();
        $mhs1->nbi = "1461900055";
        $mhs1->nama_mhs = "Rizky Fajar";
        $mhs1->save();

        $mhs2 = new Mahasiswa();
        $mhs2->nbi = "146190999";
        $mhs2->nama_mhs = "Bryant";
        $mhs2->save();

        $mhs3 = new Mahasiswa();
        $mhs3->nbi = "146190001";
        $mhs3->nama_mhs = "Ali";
        $mhs3->save();
    }
}
