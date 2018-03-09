<?php

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
    // $tag = App\Tag::find(1);
    // return $tag->blogposts;
 //    $tag = new App\Tag(array('name' => 'Hello'));
	// return App\Blogpost::find(4)->tags()->save($tag);
 
	// return $blogpost->tags;
	$blogpost = App\Blogpost::find(4);
    $blogpost->tags()->sync(array(1));

	return $blogpost->tags;
});
