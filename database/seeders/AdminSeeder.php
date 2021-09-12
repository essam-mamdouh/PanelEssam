<?php
 namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item['isAdmin'] = 1;
        $item['name'] = "Admin";
        $item['email'] = "admin@admin.com";
        $item['password'] = Hash::make(1477410);
        \App\Models\User::create($item);
    }
}
