<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    private static $blog_post = [
        [
            'title' => 'Post Article 1',
            'slug' => 'post-article-1',
            'author' => 'FandyRdh',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ipsum dolorum amet nobis a maiores sed reiciendis. Et nemo natus autem ab, voluptate nihil provident modi. Eius, magni, animi, dolore fugiat blanditiis exercitationem harum quos iste illo esse est quia at. Qui excepturi voluptas harum eligendi quos officia, culpa dolore adipisci perspiciatis, error repellendus et ipsa doloribus inventore maiores natus doloremque quaerat fugiat veritatis incidunt dignissimos, magnam deserunt similique. Error.'
        ],
        [
            'title' => 'Post Article 2',
            'slug' => 'post-article-2',
            'author' => 'Bambang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ipsum dolorum amet nobis a maiores sed reiciendis. Et nemo natus autem ab, voluptate nihil provident modi. Eius, magni, animi, dolore fugiat blanditiis exercitationem harum quos iste illo esse est quia at. Qui excepturi voluptas harum eligendi quos officia, culpa dolore adipisci perspiciatis, error repellendus et ipsa doloribus inventore maiores natus doloremque quaerat fugiat veritatis incidunt dignissimos, magnam deserunt similique. Error. uri voluptas harum eligendi quos officia, culpa dolore adipisci perspiciatis, error repellendus et ipsa doloribus inventore maiores natus doloremque quaerat fugiat veritatis incidunt dignissimos, magnam deserunt similique. Error.'
        ],
        [
            'title' => 'Post Article 3',
            'slug' => 'post-article-3',
            'author' => 'Sasuke',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat ipsum dolorum amet nobis a maiores sed reiciendis. Et nemo natus autem ab, voluptate nihil provident modi. Eius, magni, animi, dolore fugiat blanditiis exercitationem harum quos iste illo esse est quia at. Qui excepturi voluptas harum eligendi quos officia, culpa dolore adipisci perspiciatis, error repellendus et ipsa doloribus inventore maiores natus doloremque quaerat fugiat veritatis incidunt dignissimos, magnam deserunt similique. Error. uri voluptas harum eligendi quos officia, culpa dolore adipisci perspiciatis, error repellendus et ipsa doloribus inventore maiores natus doloremque quaerat fugiat veritatis incidunt dignissimos, magnam deserunt similique. Error.uri voluptas harum eligendi quos officia, culpa dolore adipisci perspiciatis, error repellendus et ipsa doloribus inventore maiores natus doloremque quaerat fugiat veritatis incidunt dignissimos, magnam deserunt similique. Error.'
        ],
    ];


    public static function allPost()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        // Tanpa Menggunakan Collection
        // $posts = self::$blog_post;
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }

        // Menggunakan Collection Data
        $posts = static::allPost();

        return $posts->firstWhere('slug', $slug);
    }
}
