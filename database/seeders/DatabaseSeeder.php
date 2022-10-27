<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Muhammad Ferdian Iqbal',
            'username' => 'ferdianqbl',
            'password' => bcrypt('Ferdian12'),
        ]);
        User::factory(10)->create();
        Category::create([
            'name' => 'Web',
        ]);
        Category::create([
            'name' => 'Design',
        ]);
        Category::create([
            'name' => 'Mobile',
        ]);
        Category::create([
            'name' => 'AI',
        ]);
        Category::create([
            'name' => 'Data',
        ]);
        Category::create([
            'name' => 'Tech',
        ]);

        Post::factory(1000)->create();
    }
}
