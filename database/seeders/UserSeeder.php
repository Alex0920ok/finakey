<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'super1',
                'email' => 'super1@finakey.ch',
                'password' => Hash::make('super1'),
                'type' => 3,
                'uuid' => (string) Str::uuid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SwissComply 1',
                'email' => 'swc1@finakey.ch',
                'password' => Hash::make('swc1'),
                'type' => 2,
                'uuid' => (string) Str::uuid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Relationship Manager 1',
                'email' => 'rm1@finakey.ch',
                'password' => Hash::make('rm1'),
                'type' => 1,
                'uuid' => (string) Str::uuid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Relationship Manager 2',
                'email' => 'rm2@finakey.ch',
                'password' => Hash::make('rm2'),
                'type' => 1,
                'uuid' => (string) Str::uuid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Relationship Manager 3',
                'email' => 'rm3@finakey.ch',
                'password' => Hash::make('rm3'),
                'type' => 1,
                'uuid' => (string) Str::uuid(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
