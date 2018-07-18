<?php

use Illuminate\Http\Request;

// Course
Route::get('free-courses', 'Course\CourseApiController@index');

// Category
Route::get('categories', 'Category\CategoryApiController@index');