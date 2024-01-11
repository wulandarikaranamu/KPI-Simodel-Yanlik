<?php

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

$controller_path = 'App\Http\Controllers';

// Main Page Route
Route::get('/home', $controller_path . '\pages\HomePage@index')->name('pages-home');
Route::get('/pelayanan-publik', $controller_path . '\pages\Page2@index')->name('pages-page-2');

//form pengisian F01-SKPD
Route::get('/kebijakan-pelayanan', function () {
  return view('content.f01-skpd.kebijakan-pelayanan');
});
Route::get('/profesionalisme-sdm', function () {
  return view('content.f01-skpd.profesionalisme-sdm');
});
Route::get('/sarana-prasarana', function () {
  return view('content.f01-skpd.sarana-prasarana');
});
Route::get('/sistem-informasi-pelayanan-publik', function () {
  return view('content.f01-skpd.sistem-informasi-pelayanan-publik');
});
Route::get('/konsultasi-dan-pengaduan', function () {
  return view('content.f01-skpd.konsultasi-dan-pengaduan');
});
Route::get('/inovasi', function () {
  return view('content.f01-skpd.inovasi');
});
Route::get('/pertanyaan-tambahan', function () {
  return view('content.f01-skpd.pertanyaan-tambahan');
});

//form pengisian F02-Evaluator
Route::get('/kebijakan-pelayanan-v2', function () {
  return view('content.f02-evaluator.kebijakan-pelayanan-v2');
});
Route::get('/profesionalisme-sdm-v2', function () {
  return view('content.f02-evaluator.profesionalisme-sdm-v2');
});
Route::get('/sarana-prasarana-v2', function () {
  return view('content.f02-evaluator.sarana-prasarana-v2');
});
Route::get('/sistem-informasi-pelayanan-publik-v2', function () {
  return view('content.f02-evaluator.sistem-informasi-pelayanan-publik-v2');
});
Route::get('/konsultasi-dan-pengaduan-v2', function () {
  return view('content.f02-evaluator.konsultasi-dan-pengaduan-v2');
});
Route::get('/inovasi-v2', function () {
  return view('content.f02-evaluator.inovasi-v2');
});
Route::get('/pertanyaan-tambahan-v2', function () {
  return view('content.f02-evaluator.pertanyaan-tambahan-v2');
});

// form pengisian F03-Evaluator
Route::get('/penilaian', function () {
  return view('content.f03-evaluator.penilaian');
});

// pages
Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');

// authentication
Route::get('/', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name(
  'auth-register-basic'
);
