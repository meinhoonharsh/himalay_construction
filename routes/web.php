<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');
Route::view('/contact', 'pages.contact');
Route::view('/faqs', 'pages.faqs');
Route::view('/projects', 'pages.projects');