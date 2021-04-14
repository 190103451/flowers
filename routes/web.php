<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('ex', function () {
    return view('welcome');
});
use App\Http\Controllers\MailController;
Route::get('/send', [MailController::class, 'send']);

use App\Http\Controllers\TemplateController;
Route::get('/', 'App\Http\Controllers\TemplateController@index');

Route::view('upload', 'upload');
//Route::post('upload', [UploadController::class, 'index']);


//use App\Http\Controllers\UploadFileController;
//Route::get('/uploadfile','App\Http\Controllers\UploadFileController@index');
//Route::post('/uploadfile','App\Http\Controllers\UploadFileController@showUploadFile');