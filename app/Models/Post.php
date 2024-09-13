<?php

namespace App\Models; // Huruf kecil untuk namespace

use Illuminate\Support\Arr;

class Post {
    // Method all untuk mendapatkan semua post
    public static function all(){
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Izzat Aji',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta ut ea ad fugit non. Adipisci harum maiores nihil
                eos inventore, maxime aliquid sequi alias animi, eveniet odio fuga sunt architecto!'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Izzat Aji',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, vel sapiente eius quidem doloribus unde quos recusandae distinctio numquam molestiae 
                eveniet debitis aut eos a exercitationem enim dicta quisquam corrupti?'
            ]
        ];
    }

    // Method find untuk menemukan post berdasarkan slug
    //public static function find($slug){
    //    return Arr::first(static::all(), function($post) use ($slug) {
    //        return $post['slug'] == $slug;
    //    });
    //}

    public static function find($slug): array 
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(! $post){
            abort(404);
        }

        return $post;

    }      
}
