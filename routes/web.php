<?php
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;

Route::get ('/',[BasicController::class, 'index'])->name('home');

Route::get ('/about',[BasicController::class, 'about'])->name('about');

Route::get ('/contact',[BasicController::class, 'contact'])->name('contact');

Route::post('/contact', [BasicController::class, 'submit'])->name('contact.post');