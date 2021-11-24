<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'title' => 'Selangor',
            'description' => 'Solat Lima Waktu',
            'created_at' => now(),
            'updated_at' => now()
            
        ]);

        DB::table('todos')->insert([
            'title' => 'Melaka',
            'description' => 'Solat Lima Waktu',
            'created_at' => now(),
            'updated_at' => now()
            
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
