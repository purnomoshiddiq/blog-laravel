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
        'title' => 'About',
        'name'  => 'Purnomo Shiddiq',
        'email' => 'purnomoshiddiq@gmail.com',
        'image' => 'sayang.jpg'
    ]);
});




Route::get('/blog', function () {

    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Bagong",
            "body"      => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur iure debitis tempore amet veniam soluta consequuntur voluptate aliquid distinctio nulla laudantium quibusdam dignissimos quis, perspiciatis eos repellendus et. Dolorem quos distinctio recusandae sint. Error magni, doloremque iure, consequatur delectus beatae, exercitationem ab dolorum libero maxime aliquid accusamus quaerat ducimus rerum. Cumque, id. Quam, nesciunt laudantium."
        ],
        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Semar",
            "body"      => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo sapiente fugiat odio perferendis facilis. Qui officia omnis eum similique neque ipsa numquam, distinctio vero adipisci recusandae voluptatum aliquam magnam eos? Culpa, nobis nam libero est ut, ab deleniti iste facilis laboriosam ipsam consectetur earum, minima iusto reiciendis neque itaque voluptatum! Ea consectetur soluta amet? Aliquam earum praesentium, ipsum totam ipsam, fuga nemo porro placeat, minima velit maiores iure? Vitae laudantium possimus eveniet et? Optio consequatur repellendus vel eveniet explicabo perspiciatis, iste, est molestias autem quidem excepturi non possimus dolorem quod? Voluptatibus temporibus ab, molestias harum delectus fugit facilis sit fuga!"
        ],

    ];

    return view('posts', [
        "title"     => "Posts",
        "posts"     => $blog_posts
    ]);
});

Route::get('/posts/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title"     => "Judul Post Pertama",
            "slug"      => "judul-post-pertama",
            "author"    => "Bagong",
            "body"      => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur iure debitis tempore amet veniam soluta consequuntur voluptate aliquid distinctio nulla laudantium quibusdam dignissimos quis, perspiciatis eos repellendus et. Dolorem quos distinctio recusandae sint. Error magni, doloremque iure, consequatur delectus beatae, exercitationem ab dolorum libero maxime aliquid accusamus quaerat ducimus rerum. Cumque, id. Quam, nesciunt laudantium."
        ],
        [
            "title"     => "Judul Post Kedua",
            "slug"      => "judul-post-kedua",
            "author"    => "Semar",
            "body"      => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quo sapiente fugiat odio perferendis facilis. Qui officia omnis eum similique neque ipsa numquam, distinctio vero adipisci recusandae voluptatum aliquam magnam eos? Culpa, nobis nam libero est ut, ab deleniti iste facilis laboriosam ipsam consectetur earum, minima iusto reiciendis neque itaque voluptatum! Ea consectetur soluta amet? Aliquam earum praesentium, ipsum totam ipsam, fuga nemo porro placeat, minima velit maiores iure? Vitae laudantium possimus eveniet et? Optio consequatur repellendus vel eveniet explicabo perspiciatis, iste, est molestias autem quidem excepturi non possimus dolorem quod? Voluptatibus temporibus ab, molestias harum delectus fugit facilis sit fuga!"
        ],

    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post"  => $new_post
    ]);
});
