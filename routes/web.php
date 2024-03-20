<?php

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

Route::get('/', function () {
    return view('index', [
        'title' => 'Login'
    ]);
});
Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});
Route::get('/guru', function () {
    return view('teacher.dataguru', [
        'title' => 'Data Guru'
    ]);
});
Route::get('/guru/tambah', function () {
    return view('teacher.dataguru_add', [
        'title' => 'Tambah Data Guru'
    ]);
});
Route::get('/siswa', function () {
    return view('student.datasiswa', [
        'title' => 'Data Siswa'
    ]);
});
Route::get('/siswa/tambah', function () {
    return view('student.datasiswa_add', [
        'title' => 'Tambah Data Siswa'
    ]);
});
Route::get('/karir', function () {
    return view('datakarir', [
        'title' => 'Data Karir'
    ]);
});
Route::get('/nilai', function () {
    return view('datanilai', [
        'title' => 'Data Nilai'
    ]);
});
