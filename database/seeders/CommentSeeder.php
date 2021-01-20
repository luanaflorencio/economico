<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'conteúdo' => 'vou participar',
            'user_id' => 1,
            'post_id' => 2

        ]);
        //
    }
}
