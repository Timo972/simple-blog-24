<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'John Doe',
            'username' => 'JohnDoe'
        ]);

        Post::factory(10)->create([
            'user_id' => $user->id,
        ]);
    }
}
