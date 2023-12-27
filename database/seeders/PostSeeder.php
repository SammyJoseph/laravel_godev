<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(20)->create()->each(function ($post){
            $tags = Tag::inRandomOrder()->limit(rand(1, 5))->get();
            foreach ($tags as $tag) {
                DB::table('taggables')->insert([
                    'tag_id'        => $tag->id,
                    'taggable_id'   => $post->id,
                    'taggable_type' => Post::class,
                ]);
            }
        });
    }
}
