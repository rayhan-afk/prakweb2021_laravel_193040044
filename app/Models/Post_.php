<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rayhan Abduhuda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque fugiat exercitationem sapiente excepturi, facilis earum ullam dolor similique beatae esse eius, non delectus consequatur rem quos, nemo necessitatibus labore maiores architecto quaerat dignissimos quasi inventore aliquam. Explicabo quidem consequatur est itaque architecto odit, sed quibusdam, tenetur dolor fugiat consectetur reiciendis harum aperiam? Reprehenderit earum neque unde rem mollitia illum enim atque similique voluptas deleniti? Maiores excepturi minus commodi consequatur et. Consectetur amet tempora dolor atque voluptatibus illum et beatae nulla!"
        ],
        [
            "title" => "Judul Posts Rayhan",
            "slug" => "judul-post-kedua",
            "author" => "Aldi Ageng",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, quas quae inventore illo est debitis, reiciendis rerum nesciunt consequatur ad pariatur sed laborum voluptate porro recusandae sint dicta accusantium aliquam impedit, atque fugit laudantium! Harum voluptatem ex earum, officiis atque porro nihil qui optio ducimus nesciunt rem. Similique veritatis animi quis numquam incidunt cum tenetur illum saepe quae inventore reiciendis hic, sunt id et consectetur fugit iste voluptates? Molestiae odit cupiditate reiciendis sint in placeat. Obcaecati ipsum saepe iste quis? Sed ipsam, ab consequatur, facilis modi voluptatum molestias, error ratione alias possimus mollitia aspernatur necessitatibus eveniet optio corporis repellat maxime."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
