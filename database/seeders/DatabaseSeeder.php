<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => Str::uuid(),
                'nama' => 'admin',
                'alamat' => 'daerah purwokerto',
                'no_telepon' => '085166562766',
                'no_sim' => '5643-1563',
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123')// Atau PW nya "zerista123" kalau semisalkan pengen pakai database punya saya
            ],
            [
                'id' => Str::uuid(),
                'nama' => 'huda',
                'alamat' => 'daerah purwokerto',
                'no_telepon' => '085166562766',
                'no_sim' => '5643-1563',
                'role' => 'user',
                'email' => 'huda@gmail.com',
                'password' => Hash::make('huda123')
            ],
            [
                'id' => Str::uuid(),
                'nama' => 'ibnu',
                'alamat' => 'daerah purwokerto',
                'no_telepon' => '085166562766',
                'no_sim' => '5643-1563',
                'role' => 'user',
                'email' => 'ibnu@gmail.com',
                'password' => Hash::make('ibnu')
            ]
        ]);

        DB::table('mobils')->insert([
            [
                'id' => Str::uuid(),
                'merek' => 'Avanza',
                'model' => 'xyz2009',
                'plat' => 'G 25637 KH',
                'tarif_sewa' => 100000,
                'status' => 'tersedia',
            ],
            [
                'id' => Str::uuid(),
                'merek' => 'Xenia',
                'model' => 'abc2019',
                'plat' => 'G 24537 HC',
                'tarif_sewa' => 200000,
                'status' => 'tersedia',
            ],
            [
                'id' => Str::uuid(),
                'merek' => 'Kijang',
                'model' => 'cc2002',
                'plat' => 'H 24337 GC',
                'tarif_sewa' => 100000,
                'status' => 'tersedia',
            ],
        ]);
    }
}
