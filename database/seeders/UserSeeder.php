<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    // Run the database seeds, inserting data into the table
    public function run(): void
    {
        DB::table('users')->insert(['name' => 'Nat Gunning', 'email' => 'n.gunning@web.co.uk', 'password' => Hash::make('natg'), 'role_id' => 1]);
        DB::table('users')->insert(['name' => 'Kate Hutton', 'email' => 'k.hutton@web.co.uk', 'password' => Hash::make('kath'), 'role_id' => 2]);
        DB::table('users')->insert(['name' => 'Yousef Miandad', 'email' => 'y.miandad@web.co.uk', 'password' => Hash::make('youm'), 'role_id' => 2]);
        DB::table('users')->insert(['name' => 'Anjali Solanki', 'email' => 'a.solanki@web.co.uk', 'password' => Hash::make('anjs'), 'role_id' => 1]);
        DB::table('users')->insert(['name' => 'Matthew Mantle', 'email' => 'm.mantle@web.co.uk', 'password' => Hash::make('matm'), 'role_id' => 1]);
    }
}