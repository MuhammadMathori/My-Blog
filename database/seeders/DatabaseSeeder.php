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
     */
    public function run(): void
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Muhammad Mathori',
            'username' => 'mmathori__',
            'email' => 'mathorimuhammad449@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::create([
            'name' => 'Shani Indira',
            'username' => 'shanidra',
            'email' => 'shani@gmail.com',
            'password' => bcrypt('12345')
        ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, ipsa?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, atque sequi omnis quam vel accusantium ad dolorum non id perferendis quibusdam quod autem laudantium! Id error libero accusantium facere molestias porro asperiores dolorum consequuntur modi, omnis dolor harum minus a. Magnam impedit facere alias ab est odio nostrum a saepe, dignissimos voluptatum, id assumenda tempore dolorem suscipit praesentium quasi nihil recusandae. Perferendis omnis sapiente reprehenderit rem  deserunt alias incidunt totam doloribus? Excepturi cumque dolore voluptatibus alias! Repudiandae dolores quidem quia quam qui enim? Quidem veritatis maiores commodi molestias velit dolorem, libero minima eius facilis voluptas ad consequuntur. Odit temporibus itaque, vero reiciendis explicabo ea magni rerum tempore aut consectetur quam, eligendi fugit quisquam laboriosam at, saepe aliquid odio excepturi totam. At hic doloremque eligendi? Odit ab ducimus obcaecati tenetur officia modi temporibus ad dolorem, excepturi itaque nisi eum aspernatur. Laborum provident ab, perferendis eum vitae architecto sequi incidunt ducimus ullam voluptatibus. Recusandae ipsa odit ea fuga maiores excepturi earum corporis molestiae doloremque. Autem, distinctio recusandae officia incidunt cum veritatis maxime beatae eum assumenda eligendi exercitationem, est iste sequi commodi itaque eaque cumque sint repudiandae maiores. Magni voluptate dignissimos excepturi? Repellendus mollitia veniam sequi non, officia animi! Nobis nulla voluptatibus quod.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, ipsa?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, atque sequi omnis quam vel accusantium ad dolorum non id perferendis quibusdam quod autem laudantium! Id error libero accusantium facere molestias porro asperiores dolorum consequuntur modi, omnis dolor harum minus a. Magnam impedit facere alias ab est odio nostrum a saepe, dignissimos voluptatum, id assumenda tempore dolorem suscipit praesentium quasi nihil recusandae. Perferendis omnis sapiente reprehenderit rem deserunt alias incidunt totam doloribus? Excepturi cumque dolore voluptatibus alias! Repudiandae dolores quidem quia quam qui enim? Quidem veritatis maiores commodi molestias velit dolorem, libero minima eius facilis voluptas ad consequuntur. Odit temporibus itaque, vero reiciendis explicabo ea magni rerum tempore aut consectetur quam, eligendi fugit quisquam laboriosam at, saepe aliquid odio excepturi totam. At hic doloremque eligendi? Odit ab ducimus obcaecati tenetur officia modi temporibus ad dolorem, excepturi itaque nisi eum aspernatur. Laborum provident ab, perferendis eum vitae architecto sequi incidunt ducimus ullam voluptatibus. Recusandae ipsa odit ea fuga maiores excepturi earum corporis molestiae doloremque. Autem, distinctio recusandae officia incidunt cum veritatis maxime beatae eum assumenda eligendi exercitationem, est iste sequi commodi itaque eaque cumque sint repudiandae maiores. Magni voluptate dignissimos excepturi? Repellendus mollitia veniam sequi non, officia animi! Nobis nulla voluptatibus quod.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, ipsa?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, atque sequi omnis quam vel accusantium ad dolorum non id perferendis quibusdam quod autem laudantium! Id error libero accusantium facere molestias porro asperiores dolorum consequuntur modi, omnis dolor harum minus a. Magnam impedit facere alias ab est odio nostrum a saepe, dignissimos voluptatum, id assumenda tempore dolorem suscipit praesentium quasi nihil recusandae. Perferendis omnis sapiente reprehenderit rem deserunt alias incidunt totam doloribus? Excepturi cumque dolore voluptatibus alias! Repudiandae dolores quidem quia quam qui enim? Quidem veritatis maiores commodi molestias velit dolorem, libero minima eius facilis voluptas ad consequuntur. Odit temporibus itaque, vero reiciendis explicabo ea magni rerum tempore aut consectetur quam, eligendi fugit quisquam laboriosam at, saepe aliquid odio excepturi totam. At hic doloremque eligendi? Odit ab ducimus obcaecati tenetur officia modi temporibus ad dolorem, excepturi itaque nisi eum aspernatur. Laborum provident ab, perferendis eum vitae architecto sequi incidunt ducimus ullam voluptatibus. Recusandae ipsa odit ea fuga maiores excepturi earum corporis molestiae doloremque. Autem, distinctio recusandae officia incidunt cum veritatis maxime beatae eum assumenda eligendi exercitationem, est iste sequi commodi itaque eaque cumque sint repudiandae maiores. Magni voluptate dignissimos excepturi? Repellendus mollitia veniam sequi non, officia animi! Nobis nulla voluptatibus quod.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, ipsa?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente, atque sequi omnis quam vel accusantium ad dolorum non id perferendis quibusdam quod autem laudantium! Id error libero accusantium facere molestias porro asperiores dolorum consequuntur modi, omnis dolor harum minus a. Magnam impedit facere alias ab est odio nostrum a saepe, dignissimos voluptatum, id assumenda tempore dolorem suscipit praesentium quasi nihil recusandae. Perferendis omnis sapiente reprehenderit rem deserunt alias incidunt totam doloribus? Excepturi cumque dolore voluptatibus alias! Repudiandae dolores quidem quia quam qui enim? Quidem veritatis maiores commodi molestias velit dolorem, libero minima eius facilis voluptas ad consequuntur. Odit temporibus itaque, vero reiciendis explicabo ea magni rerum tempore aut consectetur quam, eligendi fugit quisquam laboriosam at, saepe aliquid odio excepturi totam. At hic doloremque eligendi? Odit ab ducimus obcaecati tenetur officia modi temporibus ad dolorem, excepturi itaque nisi eum aspernatur. Laborum provident ab, perferendis eum vitae architecto sequi incidunt ducimus ullam voluptatibus. Recusandae ipsa odit ea fuga maiores excepturi earum corporis molestiae doloremque. Autem, distinctio recusandae officia incidunt cum veritatis maxime beatae eum assumenda eligendi exercitationem, est iste sequi commodi itaque eaque cumque sint repudiandae maiores. Magni voluptate dignissimos excepturi? Repellendus mollitia veniam sequi non, officia animi! Nobis nulla voluptatibus quod.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        Post::factory(20)->create();
    }
}
