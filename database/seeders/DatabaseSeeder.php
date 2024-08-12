<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KategoriService;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        KategoriService::create ([
            'nama_kategori' => 'cek kategori',
            'deskripsi' => 'ini deskripsi',
            'biaya' => '50000',
        ]);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
    }
}
