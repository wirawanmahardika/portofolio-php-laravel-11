<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::name('login')->get('/login', [Controller::class, 'login']);
Route::post('/login', [Controller::class, 'loginPost']);

Route::get('/', [Controller::class, 'home']);
Route::get('/contact', [Controller::class, 'contact']);
Route::get('/blog', [Controller::class, 'blog']);
Route::get('/blog/{blog}', [Controller::class, 'readBlog']);
Route::get('/project', [Controller::class, 'project']);


Route::middleware('auth')->group(function () {
    Route::post('/logout', [Controller::class, 'logout']);

    Route::get('/admin', [Controller::class, 'admin']);
    Route::get('/admin/about', [Controller::class, 'adminAbout']);
    Route::post('/admin/about', [Controller::class, 'adminPostAbout']);

    Route::get('/admin/skills', [SkillsController::class, 'viewAdminSkill']);
    Route::get('/admin/skills/add', [SkillsController::class, 'viewAdminTambahSkill']);
    Route::get('/admin/skills/edit', [SkillsController::class, 'viewAdminEditSkill']);
    Route::post('/admin/skills/add', [SkillsController::class, 'adminTambahSkill']);
    Route::post('/admin/skills/edit', [SkillsController::class, 'adminEditSkill']);

    Route::get('/admin/kategori', [KategoriController::class, 'viewAdminKategori']);
    Route::get('/admin/kategori/edit/{kategori}', [KategoriController::class, 'viewAdminEditKategori']);
    Route::post('/admin/kategori/tambah', [KategoriController::class, 'adminTambahKategori']);
    Route::post('/admin/kategori/edit', [KategoriController::class, 'adminEditKategori']);

    Route::get('/admin/blog', [BlogController::class, 'viewAdminBlog']);
    Route::get('/admin/blog/add', [BlogController::class, 'viewAdminTambahBlog']);
    Route::get('/admin/blog/edit/{blog}', [BlogController::class, 'viewAdminEditBlog']);
    Route::post('/admin/blog/add', [BlogController::class, 'tambahBlog']);
    Route::post('/admin/blog/edit', [BlogController::class, 'editBlog']);

    Route::get('/admin/project', [ProjectController::class, 'viewAdminProject']);
    Route::get('/admin/project/add', [ProjectController::class, 'viewAdminTambahProject']);
    Route::get('/admin/project/edit', [ProjectController::class, 'viewAdminEditProject']);
    Route::post('/admin/project/add', [ProjectController::class, 'tambahProject']);
    Route::post('/admin/project/edit', [ProjectController::class, 'editProject']);
});
