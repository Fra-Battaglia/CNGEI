<?php

namespace Database\Seeders;

use App\Models\Iscritto;
use GuzzleHttp\Promise\Is;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IscrittoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Iscritto::factory()->count(30)->create(); 
    }
}
