<?php

use Illuminate\Http\Request;

// Course
Route::get('courses', 'Course\CourseApiController@index');

// Category
Route::get('categories', 'Category\CategoryApiController@index');