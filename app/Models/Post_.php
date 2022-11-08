<?php

namespace App\Models;



class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Femas",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa officia facere ut, vitae autem voluptatum veritatis incidunt, minus fugit suscipit magnam quis! Harum, sit! Corrupti ex ipsum minus consectetur cupiditate. Similique distinctio esse soluta vel ab illum officia neque, vero repellat incidunt sed doloribus eaque, odit ut mollitia iste excepturi?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rifandi",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa officia facere ut, vitae autem voluptatum veritatis incidunt, minus fugit suscipit magnam quis! Harum, sit! Corrupti ex ipsum minus consectetur cupiditate. Similique distinctio esse soluta vel ab illum officia neque, vero repellat incidunt sed doloribus eaque, odit ut mollitia iste excepturi?"
        ],
        
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts =  static::all();
        // $post = [];
        // foreach($posts as $p){
        //  if($p["slug"] === $slug) {
        //      $post = $p;
        //     }
        // }
        return $posts->firstwhere('slug', $slug);
    }
}