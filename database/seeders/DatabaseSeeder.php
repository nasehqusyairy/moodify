<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Music;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Category::create([
            'name' => 'enthusiastic',
            'color' => 'ff0000',
        ]);
        Category::create([
            'name' => 'sad',
            'color' => '0000ff',
        ]);

        // enthusiastic
        Music::create([
            'title' => 'test music',
            'artist' => 'test artist',
            'img' => 'https://picsum.photos/200/300',
            'url' => 'https://www.youtube.com/watch?v=5qap5aO4i9A',
            'category_id' => 1,
        ]);
        Music::create([
            'title' => 'test music2',
            'artist' => 'test artist2',
            'img' => 'https://picsum.photos/200/300',
            'url' => 'https://www.musiksemangat.com/',
            'category_id' => 1,
        ]);

        // sad
        Music::create([
            'title' => 'test music3',
            'artist' => 'test artist3',
            'img' => 'https://picsum.photos/200/300',
            'url' => 'https://www.musiksad.com',
            'category_id' => 2,
        ]);
    }
}
