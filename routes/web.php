<?php
use App\Http\Controllers\ImageController;
use App\Http\Controllers\gptController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\TTSController;
use App\Http\Controllers\OCRController;
use App\Http\Controllers\TranslateImageLangAndConvertToSoundController;
use App\Http\Controllers\ConvertImageTextToSoundController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});


