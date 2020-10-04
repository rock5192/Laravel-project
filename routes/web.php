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

Route::get('/',[
    'uses'=>'FrontEndController@index',
    'as'=>'index'
]);

Auth::routes();



Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

    Route::get('/home', [
        'uses'=>'HomeController@index',
        'as'=>'home'
    ]);

    // Route::post('/subscriber',[
    //     'uses'=>'NewsLetterController@store',
        
    //  ]);


    Route::get('/post/create',[
        'uses'=>'PostController@create',
        'as'=>'post.create'
    ]);
    
    Route::post('/post/store',[
        'uses'=>'PostController@store',
        'as'=>'post.store'
    ]);

    Route::get('/posts',[
        'uses'=>'PostController@index',
        'as'=>'posts'
    ]);

    Route::get('/posts/trashed',[
        'uses'=>'PostController@trashed',
        'as'=>'posts.trashed'
    ]);

    Route::get('/posts/kill/{id}',[
        'uses'=>'PostController@kill',
        'as' =>'post.kill'
    ]);

    Route::get('/posts/restore/{id}',[
        'uses'=>'PostController@restore',
        'as'=>'post.restore'
    ]);

    Route::get('/posts/delete/{id}',[
        'uses'=>'PostController@destroy',
        'as'=>'post.delete'
    ]);

    Route::get('/posts/edit/{id}',[
        'uses'=>'PostController@edit',
        'as'=>'post.edit'
    ]);

    Route::post('/posts/update/{id}',[
        'uses'=>'PostController@update',
        'as'=>'post.update'
    ]);

    Route::get('/category/create',[
        'uses'=>'CategoriesController@create',
        'as'=>'category.create'
    ]);

        
    
    Route::get('/categories',[
        'uses'=>'CategoriesController@index',
        'as'=>'categories'
    ]);

    Route::post('/category/post',[
        'uses'=>'CategoriesController@store',
        'as'=>'category.store'
    ]);

    Route::get('/category/delete/{id}',[
        'uses'=>'CategoriesController@destroy',
        'as'=>'category.delete'
    ]);

    Route::get('/category/edit/{id}',[
        'uses'=>'CategoriesController@edit',
        'as'=>'category.edit'
    ]);

    Route::post('/category/update/{id}',[
        'uses'=>'CategoriesController@update',
        'as'=>'category.update'
    ]);

    Route::get('/tags',[
        'uses'=>'TagsController@index',
        'as'=>'tags',
        
    ]);

    Route::get('/tag/edit/{id}',[
        'uses'=>'TagsController@edit',
        'as'=>'tags.edit'
    ]);

    Route::get('/tag/delete/{id}',[
        'uses'=>'TagsController@destroy',
        'as'=>'tags.delete'
    ]);

    Route::get('/tag/create',[
        'uses'=>'TagsController@create',
        'as'=>'tags.create',
    ]);

    Route::post('/tag/post/',[
        'uses'=>'TagsController@store',
        'as'=>'tags.store'
    ]);

    Route::post('/tag/update/{id}',[
        'uses'=>'TagsController@update',
        'as'=>'tags.update'
    ]);

    Route::get('/user/index',[
        'uses'=>'UsersController@index',
        'as'=>'users'
    ]);

    Route::get('/user/create',[
        'uses'=>'UsersController@create',
        'as'=>'users.create'
    ]);

    Route::post('user/store',[
        'uses'=>'UsersController@store',
        'as'=>'users.store'
    ]);

    Route::get('/user/admin/{id}',[
        'uses'=>'UsersController@admin',
        'as'=>'user.admin'
    ]);



    Route::get('/user/not-admin/{id}',[
        'uses'=>'UsersController@not_admin',
        'as'=>'user.not.admin'
    ]);

    Route::get('/user/delete/{id}',[
        'uses'=>'UsersController@destroy',
        'as'=>'user.delete'
    ]);


    Route::get('user/profile',[
        'uses'=>'ProfilesController@index',
        'as'=>'user.profile'
    ]);

    Route::post('user/profile/update',[
        'uses'=>'ProfilesController@update',
        'as'=>'user.profile.update'
    ]);

    Route::get('/settings',[
        'uses'=>'SettingsController@index',
        'as'=>'settings'
    ]);

    Route::post('/settings/update',[
        'uses'=>'SettingsController@update',
        'as'=>'settings.update'
    ]);

    Route::get('/post/{slug}',[
        'uses'=>'FrontEndController@singlePost',
        'as'=>'post.single'

    ]);

    Route::get('/category/{id}',[
        'uses'=>'FrontEndController@category',
        'as'=>'category.single'
    ]);

    Route::get('/tag/{id}',[
        'uses'=>'FrontEndController@tag',
        'as'=>'tag.single'
    ]);

     Route::post('/results',function(){
        $posts = \App\Post::where('title','like','%' . request('query') . '%')->get();
        return view('results')->with('posts',$posts)
        ->with('title','Search results : ' . request('query'))
        ->with('settings',\App\Setting::first())
        ->with('categories',\App\Category::take(5)->get())
        ->with('query',request('query'));
      
     }); 

     Route::post('/subscribe',function(){
        $email = request('email');
        Newsletter::subscribe($email);
        Session::flash('subscribed','Successfully Subscribed');
        return redirect()->back();
     });



    Route::get('/test',function(){
        return App\Post::find(11)->tags;
    }
    );





});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
