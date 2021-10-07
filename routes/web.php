<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Rayhan Abduhuda",
        "email" => "rayhanabduhuda19@gmail.com",
        "image" => "arnold.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rayhan Abduhuda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat exercitationem sapiente excepturi, facilis earum ullam dolor similique beatae esse eius, non delectus consequatur rem quos, nemo necessitatibus labore maiores architecto quaerat dignissimos quasi inventore aliquam. Explicabo quidem consequatur est itaque architecto odit, sed quibusdam, tenetur dolor fugiat consectetur reiciendis harum aperiam? Reprehenderit earum neque unde rem mollitia illum enim atque similique voluptas deleniti? Maiores excepturi minus commodi consequatur et. Consectetur amet tempora dolor atque voluptatibus illum et beatae nulla!"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Aldi Ageng",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, quas quae inventore illo est debitis, reiciendis rerum nesciunt consequatur ad pariatur sed laborum voluptate porro recusandae sint dicta accusantium aliquam impedit, atque fugit laudantium! Harum voluptatem ex earum, officiis atque porro nihil qui optio ducimus nesciunt rem. Similique veritatis animi quis numquam incidunt cum tenetur illum saepe quae inventore reiciendis hic, sunt id et consectetur fugit iste voluptates? Molestiae odit cupiditate reiciendis sint in placeat. Obcaecati ipsum saepe iste quis? Sed ipsam, ab consequatur, facilis modi voluptatum molestias, error ratione alias possimus mollitia aspernatur necessitatibus eveniet optio corporis repellat maxime."
        ],

    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rayhan Abduhuda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat exercitationem sapiente excepturi, facilis earum ullam dolor similique beatae esse eius, non delectus consequatur rem quos, nemo necessitatibus labore maiores architecto quaerat dignissimos quasi inventore aliquam. Explicabo quidem consequatur est itaque architecto odit, sed quibusdam, tenetur dolor fugiat consectetur reiciendis harum aperiam? Reprehenderit earum neque unde rem mollitia illum enim atque similique voluptas deleniti? Maiores excepturi minus commodi consequatur et. Consectetur amet tempora dolor atque voluptatibus illum et beatae nulla!"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Aldi Ageng",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, quas quae inventore illo est debitis, reiciendis rerum nesciunt consequatur ad pariatur sed laborum voluptate porro recusandae sint dicta accusantium aliquam impedit, atque fugit laudantium! Harum voluptatem ex earum, officiis atque porro nihil qui optio ducimus nesciunt rem. Similique veritatis animi quis numquam incidunt cum tenetur illum saepe quae inventore reiciendis hic, sunt id et consectetur fugit iste voluptates? Molestiae odit cupiditate reiciendis sint in placeat. Obcaecati ipsum saepe iste quis? Sed ipsam, ab consequatur, facilis modi voluptatum molestias, error ratione alias possimus mollitia aspernatur necessitatibus eveniet optio corporis repellat maxime."
        ],

    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
