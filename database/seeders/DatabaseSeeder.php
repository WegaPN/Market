<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Barang;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // buat ID admin
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345'),
            'is_admin' => true
        ]);

        // buat ID non-admin
        User::create([
            'name' => 'User Reguler',
            'username' => 'user',
            'email' => 'user@user.com',
            'password' => bcrypt('12345'),
            'is_admin' => false
        ]);

        // buat category
        Category::create([
            'nama' => 'Baju',
            'slug' => 'Baju'
        ]);

        Category::create([
            'nama' => 'Jaket',
            'slug' => 'Jaket'
        ]);

        //buat barang
        Barang::create([
            'nama_barang' => 'Baju flanel',
            'slug' => 'Baju ',
            'desc' => 'baju dengan bahan flanel',
            'ukuran' => 'XL',
            'bahan' => 'katun',
            'warna' => 'putih',
            'harga' => '850000',
            'category_id' => 1,
            'stok' => 50,
            'user_id' => 1
        ]);

        Barang::create([
            'nama_barang' => 'Jaket kulit',
            'slug' => 'Jaket Kulit',
            'desc' => 'Jaket kulit ',
            'ukuran' => 'M',
            'bahan' => 'kulit',
            'warna' => 'hitam',
            'harga' => '850000',
            'category_id' => 2,
            'stok' => 50,
            'user_id' => 1
        ]);
    }
}
