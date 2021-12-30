<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Soni Hidayatulloh',
            'username' => 'soni_h',
            'email' => 'soni@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Pemograman',
            'slug' => 'pemograman'
        ]);

        Category::create([
            'name' => 'Web Desaign',
            'slug' => 'web-desaign'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(100)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Belajar Laravel',
        //     'slug' => 'belajar-laravel',
        //     'excerpt' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, totam.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero deleniti, voluptas ipsa nesciunt odit error, fuga quam quia numquam voluptates in harum, fugiat officia cupiditate quidem consequuntur ipsam? Inventore accusamus consequuntur rem quam, deserunt consectetur aliquam molestiae ipsa quas sit impedit earum iure, magnam minus asperiores repellat minima nesciunt? Dolore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero deleniti, voluptas ipsa nesciunt odit error, fuga quam quia numquam voluptates in harum, fugiat officia cupiditate quidem consequuntur ipsam? Inventore accusamus consequuntur rem quam, deserunt consectetur aliquam molestiae ipsa quas sit impedit earum iure, magnam minus asperiores repellat minima nesciunt? Dolore.</p>',
        // ]);    

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Belajar PHP',
        //     'slug' => 'belajar-php',
        //     'excerpt' => '<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium, totam.</p>',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero deleniti, voluptas ipsa nesciunt odit error, fuga quam quia numquam voluptates in harum, fugiat officia cupiditate quidem consequuntur ipsam? Inventore accusamus consequuntur rem quam, deserunt consectetur aliquam molestiae ipsa quas sit impedit earum iure, magnam minus asperiores repellat minima nesciunt? Dolore.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero deleniti, voluptas ipsa nesciunt odit error, fuga quam quia numquam voluptates in harum, fugiat officia cupiditate quidem consequuntur ipsam? Inventore accusamus consequuntur rem quam, deserunt consectetur aliquam molestiae ipsa quas sit impedit earum iure, magnam minus asperiores repellat minima nesciunt? Dolore.</p>',
        // ]);    
    }
}
