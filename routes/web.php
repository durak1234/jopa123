<?php

use Illuminate\Support\Facades\Route;

use App\Models\Skill;

use App\Models\Portfolio;

use App\Http\Controllers\testcontroller;
Route::get('/', function () {
    return view('welcome');
});

Route:: get ('/test/{id}',[testcontroller::class, 'show']);

Route::get('/skills', [testcontroller::class, 'skills']);

Route::get('/skills/{category}', [testcontroller::class, 'skillsCategory']);

Route::get('/skills-json', [testcontroller::class, 'getAllSkills'])->middleware('auth');

Route:: get ('/portfolio', function(){
    $title = 'Портфолио Terricon';
    $portfolio = Portfolio::all();
    return view('portfolio')
        ->with('title', $title)
        ->with('portfolio', $portfolio);
});

Route:: get ('/news', function(){
    $title = 'Новости Terricon';
    return view('news', [
        'title' => $title
    ]);
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
