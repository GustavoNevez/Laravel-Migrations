<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            'posttitle' => 'Windors',
            'author' => 'Jorge Luiz',
            'publicationdate' => '2004-10-05',
            'content' => 'nothing',
            'tags' => 'post'
        ]);
    }
}
