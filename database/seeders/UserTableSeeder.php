<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new User;
        $a-> name = "Ali";
        $a-> email = "Ali@email.com";
        $a-> password = "Ali123";
        $a-> save();

        User::factory()->count(14)->create();
    }
}
