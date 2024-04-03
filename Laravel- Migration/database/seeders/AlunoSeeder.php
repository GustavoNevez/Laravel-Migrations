<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aluno')->insert([
            'name' => 'Gustavo',
            'dateofbirth' => '1999-08-08',
            'email' => 'Gustavo@gmail.com',
            'registrationnumber' => '3245323',
            'classcourse' => 'Eng Software',
        ]);
    }
}
