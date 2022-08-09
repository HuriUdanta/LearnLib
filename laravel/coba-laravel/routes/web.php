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
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'nama' => 'FandyRdh',
        'email' => 'FandyRdh@gmail.com',
        'image' => 'contohImg.jpg',
    ]);
});








Route::get('/blog', function () {
    $blog_post = [
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

    return view('posts', [
        'title' => 'Blog',
        'posts' => $blog_post
    ]);
});


Route::get('/posts/{slug}', function ($slug) {
    $blog_post = [
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

    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => 'Blog',
        'post' => $new_post
    ]);
});
