<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultings')->insert
        (
[
['Consulting_name' => 'Medical consultating'],
['Consulting_name' => 'Vocational consulting'],
['Consulting_name' => 'Psychological counseling'],
['Consulting_name' => 'Family counseling'],
['Consulting_name' =>'Business consulting'],
]
        );  }
    }

