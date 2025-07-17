<?php

use App\Http\Controllers\AdminProjectsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PageProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Public Routes (Landing Page)
|--------------------------------------------------------------------------
|
| Routes yang dapat diakses tanpa login
|
*/

Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::get('/projects', [PageProjectController::class, 'projects'])->name('projects');
Route::get('/projects/{slug}', [PageProjectController::class, 'project'])->name('project');
Route::get('/services', function () {
    return Inertia::render('Services');
})->name('services');
Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');
Route::get('products', function () {
    return Inertia::render('Products');
})->name('products');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
|
| Routes yang memerlukan authentication untuk mengakses admin panel
|
*/

Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard Admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Project Management
    Route::get('/admin-projects', [AdminProjectsController::class, 'index'])->name('admin-projects');
    Route::get('/admin-projects/create', [AdminProjectsController::class, 'create'])->name('admin-projects.create');
    Route::post('/admin-projects', [AdminProjectsController::class, 'store'])->name('admin-projects.store');
    Route::get('/admin-projects/{project}/edit', [AdminProjectsController::class, 'edit'])->name('admin-projects.edit');
    Route::put('/admin-projects/{project}', [AdminProjectsController::class, 'update'])->name('admin-projects.update');
    Route::get('/admin-projects/{project}', [AdminProjectsController::class, 'show'])->name('admin-projects.show');
    Route::delete('/admin-projects/{project}', [AdminProjectsController::class, 'destroy'])->name('admin-projects.destroy');
    Route::post('/admin-projects-bulk', [AdminProjectsController::class, 'bulkAction'])->name('admin-projects.bulk');


    // Profile Management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User Management
    Route::resource('users', UserController::class);

    // Role Management
    Route::resource('roles', RoleController::class);
});

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

require __DIR__ . '/auth.php';