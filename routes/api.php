<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillController;

Route::get('/skills',[SkillController::class,'getApiSkills']);

Route::post('/skills',[SkillController::class,'createApiSkill']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
