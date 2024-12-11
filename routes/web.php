<?php

use Illuminate\Support\Facades\Route;

use App\Models\Skill;

use App\Http\Controllers\TestController;

use App\Http\Controllers\SkillController;

use App\Http\Controllers\PortfolioController;

use App\Http\Controllers\AdminController;

// test
Route::get('/', function () { return view('welcome'); });

Route::get('/pages/{name}',function ($name){
    return view("pages.$name");
})->name('pages');

Route::get('/test/{id}', [TestController::class, 'show']);

Route::get('/skills/{category}', [TestController::class, 'skillsCategory']);

// Это маршрут навыков
Route::get('/skills', [TestController::class, 'skills']);

Route::get('/skills-json', [TestController::class, 'getAllSkills'])->middleware('auth');

Route::get('/create-skill',[SkillController::class,'renderCreatePage'])
->middleware('auth')
->name('skillCreate');

Route::get('/delete-skill/{id}',[SkillController::class,'skillDelete'])
->middleware('auth')
->name('skillDelete');

Route::post('/create-skill',[SkillController::class,'createSkill'])
->middleware('auth')
->name('skillCreate.post');

Route::get('/create-portfolio',[PortfolioController::class,'renderCreatePage'])
->middleware('auth')
->name('portfolioCreate');

Route::post('/create-portfolio',[PortfolioController::class,'createPortfolio'])
->middleware('auth')
->name('portfolioCreate.post');

Route::get('/create-portfolio/{id}',[PortfolioController::class,'portfolioDelete'])
->middleware('auth')
->name('portfolioDelete');

Route::middleware([
    'auth',
    'roleChecker:admin'
])->prefix('admin')->group(function(){
    Route::get('/users', [AdminController::class,'renderUsers'])->name('renderUsers');
});

Route::get('/delete-user/{id}',[AdminController::class,'deleteUser'])
->name('deleteUser');

Route::get('/users/{id}',[AdminController::class,'renderEditUser'])
->name('renderEditUser');


Route::post('/users/{id}',[AdminController::class,'editUser'])
->name('editUser');

Route::post('/add-user',[AdminController::class,'addUser'])
->name('addUser');

Route::get('/add-user',[AdminController::class,'renderAddUser'])
->name('renderAddUser');


Route::get('/portfolio', function () {
    $title = 'Портфолио Terricon';

    $jobs = [
        [
            'name' => 'Разработка сайта для ЖК',
            'price' => 1000,
            'val' => '$'
        ],
        [
            'name' => 'Разработка сайта для Клиники',
            'price' => 1500,
            'val' => '$'
        ],
        [
            'name' => 'Разработка сайта для Terricon',
            'price' => 2000,
            'val' => '$'
        ]
    ];

    return view('portfolio')
        ->with('title', $title)
        ->with('jobs', $jobs);
});

Route::get('/news', function () {
    $title = 'Новости';

    return view('news')->with('title', $title);
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