<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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

        // User::create([
        //     'name' => 'Femas Rifandi',
        //     'username' => 'Femasss',
        //     'email' => 'itsuki@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Femas Tampan',
        //     'email' => 'anjay@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'web programmer',
            'slug' => 'web-programmer'
        ]);

        Category::create([
            'name' => 'web desaign',
            'slug' => 'web-desaign'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit quibusdam alias quod, asperiores amet maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit quibusdam alias quod, asperiores amet maiores perferendis reprehenderit fuga rerum, repellat fugit inventore omnis. Quam vitae ipsum voluptas quidem aspernatur dolor sint, harum, ut, fugit quis ab! Rerum blanditiis molestias asperiores explicabo voluptatem autem. Dolor tenetur, voluptatibus quibusdam excepturi in nostrum velit animi autem ratione, perspiciatis, voluptatum corporis obcaecati! Nesciunt laborum voluptatibus perferendis obcaecati! Placeat, velit. Error, ipsam. Repellendus eaque alias porro voluptatibus. Corrupti et quibusdam modi nostrum error optio tempore, qui enim nisi exercitationem ad dolorum rem. Officiis harum qui provident quisquam. Eius, quis! Eaque recusandae nihil culpa eos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit quibusdam alias quod, asperiores amet maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit quibusdam alias quod, asperiores amet maiores perferendis reprehenderit fuga rerum, repellat fugit inventore omnis. Quam vitae ipsum voluptas quidem aspernatur dolor sint, harum, ut, fugit quis ab! Rerum blanditiis molestias asperiores explicabo voluptatem autem. Dolor tenetur, voluptatibus quibusdam excepturi in nostrum velit animi autem ratione, perspiciatis, voluptatum corporis obcaecati! Nesciunt laborum voluptatibus perferendis obcaecati! Placeat, velit. Error, ipsam. Repellendus eaque alias porro voluptatibus. Corrupti et quibusdam modi nostrum error optio tempore, qui enim nisi exercitationem ad dolorum rem. Officiis harum qui provident quisquam. Eius, quis! Eaque recusandae nihil culpa eos.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit quibusdam alias quod, asperiores amet maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit quibusdam alias quod, asperiores amet maiores perferendis reprehenderit fuga rerum, repellat fugit inventore omnis. Quam vitae ipsum voluptas quidem aspernatur dolor sint, harum, ut, fugit quis ab! Rerum blanditiis molestias asperiores explicabo voluptatem autem. Dolor tenetur, voluptatibus quibusdam excepturi in nostrum velit animi autem ratione, perspiciatis, voluptatum corporis obcaecati! Nesciunt laborum voluptatibus perferendis obcaecati! Placeat, velit. Error, ipsam. Repellendus eaque alias porro voluptatibus. Corrupti et quibusdam modi nostrum error optio tempore, qui enim nisi exercitationem ad dolorum rem. Officiis harum qui provident quisquam. Eius, quis! Eaque recusandae nihil culpa eos.',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit quibusdam alias quod, asperiores amet maiores',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odit quibusdam alias quod, asperiores amet maiores perferendis reprehenderit fuga rerum, repellat fugit inventore omnis. Quam vitae ipsum voluptas quidem aspernatur dolor sint, harum, ut, fugit quis ab! Rerum blanditiis molestias asperiores explicabo voluptatem autem. Dolor tenetur, voluptatibus quibusdam excepturi in nostrum velit animi autem ratione, perspiciatis, voluptatum corporis obcaecati! Nesciunt laborum voluptatibus perferendis obcaecati! Placeat, velit. Error, ipsam. Repellendus eaque alias porro voluptatibus. Corrupti et quibusdam modi nostrum error optio tempore, qui enim nisi exercitationem ad dolorum rem. Officiis harum qui provident quisquam. Eius, quis! Eaque recusandae nihil culpa eos.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
