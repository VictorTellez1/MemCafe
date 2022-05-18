<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Victor',
            'email'=>'correo@correo.com',
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('123456789'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name'=>'Penny',
            'email'=>'correo1@correo.com',
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('123456789'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
    }
}
