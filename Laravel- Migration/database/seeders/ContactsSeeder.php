<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => Crypt::encryptString('Gustavo Neve'),
            'email' => Crypt::encryptString('neves@gmail.com'),
            'telefone' => Crypt::encryptString('(42) 98434341'),
            'data_nascimento' => Crypt::encryptString('2000-08-04')
        ]);

        DB::table('contacts')->insert([
            'name' => Crypt::encryptString('Marco Silva'),
            'email' => Crypt::encryptString('marcos@gmail.com'),
            'telefone' => Crypt::encryptString('(42) 99886787'),
            'data_nascimento' => Crypt::encryptString('2005-07-09')
        ]);
    }
}
