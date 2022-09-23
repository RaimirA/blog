<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('users')->truncate();
//        DB::table('categories')->truncate();
//        DB::table('posts')->truncate();
        $user = User::factory()->create([
            'name'=>'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);

//        $user = User::factory()->create();
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-first-post',
//            'excerpt' => 'Lorem ipsum dolar sit amet.',
//            'body' => 'Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.
//                Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.
//                Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.',
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-second-post',
//            'excerpt' => 'Lorem ipsum dolar sit amet.',
//            'body' => 'Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.
//                Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.
//                Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.Lorem ipsum dolar sit amet.',
//        ]);


    }
}
