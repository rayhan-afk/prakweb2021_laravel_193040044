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


        // User::create([
        //     'name' => 'Rayhan Abduhuda',
        //     'email' => 'rayhanabduhuda19@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Aldi Nuansa',
        //     'email' => 'ngoding@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi a dignissimos fuga error, voluptatibus temporibus, assumenda nostrum perspiciatis voluptatum atque, voluptates reprehenderit harum eius.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi a dignissimos fuga error, voluptatibus temporibus, assumenda nostrum perspiciatis voluptatum atque, voluptates reprehenderit harum eius. Qui, placeat! Qui possimus nobis vitae pariatur. Libero, magni, fugiat iusto at suscipit doloremque quis blanditiis dignissimos dolor vero eligendi quas facilis dolores corporis corrupti expedita quasi voluptates accusamus pariatur tempora mollitia exercitationem. Consequuntur quis iusto pariatur, ipsum quia ducimus tempora at, excepturi nostrum asperiores expedita omnis dolore, reiciendis obcaecati cumque? Provident similique adipisci enim excepturi quisquam? Iusto, natus, sunt blanditiis ratione nesciunt ex incidunt, officiis voluptate voluptatibus iure provident adipisci dignissimos? Dolorum nesciunt maxime blanditiis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi a dignissimos fuga error, voluptatibus temporibus, assumenda nostrum perspiciatis voluptatum atque, voluptates reprehenderit harum eius.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi a dignissimos fuga error, voluptatibus temporibus, assumenda nostrum perspiciatis voluptatum atque, voluptates reprehenderit harum eius. Qui, placeat! Qui possimus nobis vitae pariatur. Libero, magni, fugiat iusto at suscipit doloremque quis blanditiis dignissimos dolor vero eligendi quas facilis dolores corporis corrupti expedita quasi voluptates accusamus pariatur tempora mollitia exercitationem. Consequuntur quis iusto pariatur, ipsum quia ducimus tempora at, excepturi nostrum asperiores expedita omnis dolore, reiciendis obcaecati cumque? Provident similique adipisci enim excepturi quisquam? Iusto, natus, sunt blanditiis ratione nesciunt ex incidunt, officiis voluptate voluptatibus iure provident adipisci dignissimos? Dolorum nesciunt maxime blanditiis?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi a dignissimos fuga error, voluptatibus temporibus, assumenda nostrum perspiciatis voluptatum atque, voluptates reprehenderit harum eius.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi a dignissimos fuga error, voluptatibus temporibus, assumenda nostrum perspiciatis voluptatum atque, voluptates reprehenderit harum eius. Qui, placeat! Qui possimus nobis vitae pariatur. Libero, magni, fugiat iusto at suscipit doloremque quis blanditiis dignissimos dolor vero eligendi quas facilis dolores corporis corrupti expedita quasi voluptates accusamus pariatur tempora mollitia exercitationem. Consequuntur quis iusto pariatur, ipsum quia ducimus tempora at, excepturi nostrum asperiores expedita omnis dolore, reiciendis obcaecati cumque? Provident similique adipisci enim excepturi quisquam? Iusto, natus, sunt blanditiis ratione nesciunt ex incidunt, officiis voluptate voluptatibus iure provident adipisci dignissimos? Dolorum nesciunt maxime blanditiis?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi a dignissimos fuga error, voluptatibus temporibus, assumenda nostrum perspiciatis voluptatum atque, voluptates reprehenderit harum eius.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi a dignissimos fuga error, voluptatibus temporibus, assumenda nostrum perspiciatis voluptatum atque, voluptates reprehenderit harum eius. Qui, placeat! Qui possimus nobis vitae pariatur. Libero, magni, fugiat iusto at suscipit doloremque quis blanditiis dignissimos dolor vero eligendi quas facilis dolores corporis corrupti expedita quasi voluptates accusamus pariatur tempora mollitia exercitationem. Consequuntur quis iusto pariatur, ipsum quia ducimus tempora at, excepturi nostrum asperiores expedita omnis dolore, reiciendis obcaecati cumque? Provident similique adipisci enim excepturi quisquam? Iusto, natus, sunt blanditiis ratione nesciunt ex incidunt, officiis voluptate voluptatibus iure provident adipisci dignissimos? Dolorum nesciunt maxime blanditiis?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
