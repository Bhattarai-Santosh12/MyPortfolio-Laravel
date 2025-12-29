<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\About;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', HomePage::class)->name('index');
// Route::get('/about-us', About::class)->name('about-us');

Route::get('/', HomePage::class)->name('index');
// Route::get('/about', About::class)->name('about');