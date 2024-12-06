<?php

use Illuminate\Support\Facades\Route;

use App\Models\Skill;

use App\Models\Portfolio;

Route::get('/', function () {
    return view('welcome');
});

Route:: get ('/test', function(){
    return 123;
});

Route::get('/skills/{category}', function($category){
    $title = "Навыки в категории $category";
    $skills = Skill::where('category', $category)->get();
    return view('skills')
        ->with('title',$title)
        ->with('skills',$skills);
});
//Маршрут навыков
Route:: get ('/skills', function(){
    $title = 'Навыки';
    $skills = Skill::all();
    return view('skills')
        ->with('title', $title)
        ->with('skills',$skills);
});

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
