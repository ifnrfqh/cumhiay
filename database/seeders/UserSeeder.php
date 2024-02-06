<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Role;
use App\Models\Saldo;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bank = Role::create(["name" => "Bank"]);
        $canteen = Role::create(["name" => "Canteen"]);
        $student = Role::create(["name" => "Student"]);

        
        User::create([
            "name" => "bank",
            "email" => "bank@gmail.com",
            "password" => Hash::make("bank"),
            "role_id" => $bank->id
        ]);

        User::create([
            "name" => "kantin",
            "email" => "kantin@gmail.com",
            "password" => Hash::make("kantin"),
            "role_id" => $canteen->id
        ]);

        $ghifary = User::create([
            "name" => "siswa",
            "email" => "siswa@gmail.com",
            "password" => Hash::make("siswa"),
            "role_id" => $student->id
        ]);

        $pucuk = Barang::create([
            "name" => "Teh Pucuk",
            "image" => "pucuk.jpg",
            "price" => 3500,
            "stock" => 10,
            "desc" => "Minuman teh Asu"
        ]);

        Saldo::create([
            "user_id" => $ghifary->id,
            "saldo" => 300000
        ]);

        //Isi Saldo
        Transaksi::create([
            "user_id" => $ghifary->id,
            "barang_id" => null,
            "jumlah" => 500000,
            "invoice_id" => "SAL_001",
            "type" => 1,
            "status" => 3
        ]);

        
}
}
