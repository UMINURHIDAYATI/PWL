  
<?php




//Route::get('/hello', 'WelcomeController@hello');

//Route::get('/', 'HomeController@index'); 

//Route::get('/', function(){
//	return view('welcome');
//});

Route::get('/article', 'Home1Controller@index');

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

Route::get('/info', 'InfoController@index');

Route::get('/contact', 'ContactController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');