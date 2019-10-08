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

// Route::get('/projects', function () {
//     return view('projects.create');
// });

//Our projects resource
//   Option: #1
// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');


// Option: #2
Route::resource('/projects', 'ProjectsController');
//Route::resource('/projects/modal', 'ProjectsController@modal');
Route::post('/projects/{project}/tasks', 'ProjectTaskController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');