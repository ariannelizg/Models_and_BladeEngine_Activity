<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\HobbiesController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', [AboutMeController::class, 'aboutMe']);

Route::get('/skills', [SkillsController::class, 'mySkills']);

Route::get('/hobbies', [HobbiesController::class, 'myHobbies']);