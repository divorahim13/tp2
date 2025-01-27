<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

// Halaman utama (opsional, arahkan ke daftar proyek)
Route::get('/', function () {
    return redirect()->route('projects.index');
});

// Rute untuk Proyek
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index'); // Menampilkan daftar proyek
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create'); // Form tambah proyek
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store'); // Simpan proyek baru

// Rute untuk Tugas
Route::get('/projects/{project}/tasks/create', [TaskController::class, 'create'])->name('tasks.create'); // Form tambah tugas untuk proyek tertentu
Route::post('/projects/{project}/tasks', [TaskController::class, 'store'])->name('tasks.store'); // Simpan tugas baru untuk proyek tertentu

// Rute tambahan (opsional)
// Bisa ditambahkan sesuai kebutuhan, misalnya melihat detail proyek atau tugas tertentu
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show'); // Menampilkan detail proyek
