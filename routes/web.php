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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::resource('questions', 'QuestionsController')->except('show');
// Route::post('/questions/{question}/answers', 'AnswersController@store')->name('answers.store');
Route::resource('questions.answers', 'AnswersController')->except(['index', 'create', 'show']);
Route::get('/questions/{slug}', 'QuestionsController@show')->name('questions.show');

Route::post('/answers/{answer}/accept','AcceptAnswerController')->name('answers.accept');
=======
Route::resource('questions','QuestionsController')->except('show');
//Route::post('/questions/{question}/answers','AnswersController@store')->name('answer.store');
Route::resource('questions.answers','AnswersController')->except(['index','create','show']);
Route::get('/questions/{slug}','QuestionsController@show')->name('questions.show');
<<<<<<< HEAD
?>
>>>>>>> c7344d8f3ba6e1d1dd332aec07906f847ea73c62
=======
Route::post('/answers/{answer}/accept','AcceptAnswerController')->name('answers.accept');


?>
>>>>>>> lesson-20
