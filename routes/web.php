<?php

use App\Http\Controllers\fristcontroller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.forntend-layouts');
});
Route::get('/', function () {
    return view('frontend.home');
});
//index
Route::get('/index', [fristcontroller::class, 'index2'])->name('index');
//index-2
Route::get('/index-2', [fristcontroller::class, 'index3'])->name('index');
//about
Route::get('/about', [fristcontroller::class, 'about'])->name('about');
//team
Route::get('/team', [fristcontroller::class, 'team'])->name('team');
//price
Route::get('/price', [fristcontroller::class, 'price'])->name('price');
//services
Route::get('/services', [fristcontroller::class, 'services'])->name('services');
//cctv s
Route::get('/cctvSecurity', [fristcontroller::class, 'cctvSecurity'])->name('cctvSecurity');
//executiveprotection
Route::get('/executiveProtection', [fristcontroller::class, 'executiveProtection'])->name('executive-protection');
//cyberSecurity
Route::get('/cyberSecurity', [fristcontroller::class, 'cyberSecurity'])->name('cyberSecurity');
//privateSecurity
Route::get('/privateSecurity', [fristcontroller::class, 'privateSecurity'])->name('privateSecurity');
//cloud
Route::get('/cloudSecurity', [fristcontroller::class, 'cloudSecurity'])->name('cloudSecurity');
//network
Route::get('/networkSecurity', [fristcontroller::class, 'networkSecurity'])->name('networkSecurity');
//projcts1
Route::get('/projects1', [fristcontroller::class, 'projects1'])->name('projects1');
//projects2
Route::get('/projects2', [fristcontroller::class, 'projects2'])->name('projects2');
//projcts3
Route::get('/projects3', [fristcontroller::class, 'projects3'])->name('projects3');
//blog
Route::get('/blog', [fristcontroller::class, 'blog'])->name('blog');
//blogclassic
Route::get('/blogClassic', [fristcontroller::class, 'blogClassic'])->name('blogClassic');
//blogDetails
Route::get('/blogDetail', [fristcontroller::class, 'blogDetail'])->name('blogDetail');
//notFound
Route::get('/notFound', [fristcontroller::class, 'notFound'])->name('notFound');
//camera
Route::get('/camera', [fristcontroller::class, 'camera'])->name('camera');
//contact
Route::get('/contact', [fristcontroller::class, 'contact'])->name('contract');
