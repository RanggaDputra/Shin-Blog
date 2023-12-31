<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(3)->create();
        \App\Models\Post::factory(25)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' =>'Rangga',
        //     'email' => 'rangga@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' =>'Dimas',
        //     'email' => 'dimas@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
         'name' => 'Web Programming',
         'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
           ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt'=> 'lorem ipsum',
        //     'body' => 'lorem ipsum sit dolor amtetet',
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt'=> 'lorem ipsum',
        //     'body' => 'lorem ipsum sit dolor amtetet',
        //     'category_id' => 1,
        //     'user_id'=> 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt'=> 'lorem ipsum',
        //     'body' => 'lorem ipsum sit dolor amtetet',
        //     'category_id' => 2,
        //     'user_id'=> 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt'=> 'lorem ipsum',
        //     'body' => 'lorem ipsum sit dolor amtetet',
        //     'category_id' => 2,
        //     'user_id'=> 2
        // ]);
    }
}
