<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = new Comment;
        $a-> body = "Gratitude is beutiful";
        $a-> user_id = 1;
        $a-> post_id = 1;
        $a-> save();

        Comment::factory()->count(44)->create();
    }
}
