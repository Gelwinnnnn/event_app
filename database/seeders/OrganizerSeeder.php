<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('organizers')->insert([
            ['name' => 'Organizer 1', 'description' => 'Deskripsi Organizer 1', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Organizer 2', 'description' => 'Deskripsi Organizer 2', 'created_at' => now(), 'updated_at' => now()],
            // Tambahkan 3 lagi
        ]);
    }
}
