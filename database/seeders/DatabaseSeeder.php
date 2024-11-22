<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create Tags
        $tag1 = Tag::create(['name' => 'Laravel']);
        $tag2 = Tag::create(['name' => 'PHP']);
        $tag3 = Tag::create(['name' => 'Programming']);

        // Create Posts
        $post = Post::create(['title' => 'Laravel Post', 'content' => 'Laravel is amazing!']);
        $post2 = Post::create(['title' => 'Laravel Post 2', 'content' => 'Laravel is amazing naw!']);
        $video = Video::create(['title' => 'Laravel Video Tutorial', 'url' => 'https://youtube.com/example']);

        // Attach Tags
        $post->tags()->attach([$tag1->id, $tag3->id]);
        $post2->tags()->attach([$tag3->id]);
        $video->tags()->attach([$tag2->id, $tag3->id]);
    }
}
