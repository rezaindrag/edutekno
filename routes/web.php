<?php


// Home
Route::get('/', 'Home\HomeController@index');

// Auth
Route::get('login', 'Auth\LoginController@index');
Route::post('authenticate', 'Auth\LoginController@authenticate');
Route::get('register', 'Auth\RegisterController@index');

// Class Room
Route::get('classroom/dashboard', 'ClassRoom\DashboardController@index');
Route::get('classroom/mycourses', 'ClassRoom\CourseController@index');
Route::get('classroom/mycourses/{slug}', 'ClassRoom\CourseController@show');
Route::get('classroom/play', 'ClassRoom\PlayController@index');
Route::get('logout', 'ClassRoom\DashboardController@logout');

// Play
Route::get('play', 'Play\PlayController@index');

// User
Route::get('user/profile', 'User\UserController@profile');

// Courses
Route::get('courses', 'Course\CourseController@index');
Route::get('{slug}', 'Course\CourseController@show');
Route::get('preview/{courseSlug}/{lessonSlug}/{videoSlug}', 'Course\CourseController@preview');
