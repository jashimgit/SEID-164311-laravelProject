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



Route::get('/booktitle', function (){
   return view('/booktitle/mainpage');
});




//Route::get('/booktitle', function(){
//
//    return view ('booktitle/mainpage');
//
//});

Route::get('/booktitle/create', function(){

    return view ('/booktitle/create');

});

Route::post('/booktitle/store', ['uses'=>'BookTitleController@store']);

Route::get('/booktitle/index', ['uses'=>'BookTitleController@index']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/booktitle/user/{id}/{name?}',function($id , $name){
    echo 'Your ID is : ' .$id ." ". "<br>";

    echo 'Your Name is : ' .$name;
});

Route::get('/booktitle/view/{id}', ['uses' => 'BookTitleController@view']);

Route::get('/booktitle/edit/{id}', ['uses' => 'BookTitleController@edit']);


Route::post('/booktitle/edit/update', ['uses'=> 'BookTitleController@update']);

Route::get('/booktitle/delete/{id}', ['uses' => 'BookTitleController@delete']);



Route::post('/booktitle/search_result', function(){
//var_dump($_POST); die();
   $path = '/booktitle/search/'.$_POST['keyword'] ;

   return redirect($path);
});


Route::get('booktitle/search/{keyword}', ['uses' => 'BookTitleController@search']);