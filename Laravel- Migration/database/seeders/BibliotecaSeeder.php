<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biblioteca')->insert([
            'title' => 'I.A na vida',
            'authorpublisher' => 'Roberto',
            'publicationdate' =>  '1987-03-2',
            'availablecopies' => '1000',
        ]);
    }
}
