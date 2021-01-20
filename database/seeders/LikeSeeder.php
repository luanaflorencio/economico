<?php

namespace Database\Seeders;

use App\Models\Like;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Like::create([
            'deslike' => 0,
            'user_id' => 1,
            'post_id' => 2

        ]);
    }
}
