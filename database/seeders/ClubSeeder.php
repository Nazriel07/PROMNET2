<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 10; $i++){
            DB::table('clubs')->insert([
                'name'=>Str::random(10),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
    }
}
