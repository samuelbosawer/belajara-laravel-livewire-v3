<?php
use Illuminate\Support\Facades\Route;


Route::get('/', \app\Livewire\Home::class)->name('home');
Route::get('/about', \App\Livewire\About::class)->name('about');
