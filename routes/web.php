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
    return view('home');
})->name('home');

Route::get('/merge_pdf', function () {
    return view('merge_pdf');
})->name('merge_pdf');

Route::get('/split_pdf', function () {
    return view('split_pdf');
})->name('split_pdf');

Route::get('/compress_pdf', function () {
    return view('compress_pdf');
})->name('compress_pdf');

Route::get('/jpg_to_pdf', function () {
    return view('jpg_to_pdf');
})->name('jpg_to_pdf');

Route::get('/word_to_pdf', function () {
    return view('word_to_pdf');
})->name('word_to_pdf');

Route::get('/powerpoint_to_pdf', function () {
    return view('powerpoint_to_pdf');
})->name('powerpoint_to_pdf');

Route::get('/excel_to_pdf', function () {
    return view('excel_to_pdf');
})->name('excel_to_pdf');

Route::get('/html-to-pdf', function () {
    return view('html-to-pdf');
})->name('html-to-pdf');

Route::get('/pdf_to_jpg', function () {
    return view('pdf_to_jpg');
})->name('pdf_to_jpg');

Route::get('/pdf_to_word', function () {
    return view('pdf_to_word');
})->name('pdf_to_word');

Route::get('/pdf_to_powerpoint', function () {
    return view('pdf_to_powerpoint');
})->name('pdf_to_powerpoint');

Route::get('/pdf_to_excel', function () {
    return view('pdf_to_excel');
})->name('pdf_to_excel');

Route::get('/convert-pdf-to-pdfa', function () {
    return view('convert-pdf-to-pdfa');
})->name('convert-pdf-to-pdfa');

Route::get('/remove-pages', function () {
    return view('remove-pages');
})->name('remove-pages');

Route::get('/organize-pdf', function () {
    return view('organize-pdf');
})->name('organize-pdf');

Route::get('/scan-pdf', function () {
    return view('scan-pdf');
})->name('scan-pdf');

Route::get('/repair-pdf', function () {
    return view('repair-pdf');
})->name('repair-pdf');

Route::get('/ocr-pdf', function () {
    return view('ocr-pdf');
})->name('ocr-pdf');

Route::get('/rotate_pdf', function () {
    return view('rotate_pdf');
})->name('rotate_pdf');

Route::get('/add_pdf_page_number', function () {
    return view('add_pdf_page_number');
})->name('add_pdf_page_number');

Route::get('/pdf_add_watermark', function () {
    return view('pdf_add_watermark');
})->name('pdf_add_watermark');

Route::get('/edit-pdf', function () {
    return view('edit-pdf');
})->name('edit-pdf');

Route::get('/unlock_pdf', function () {
    return view('unlock_pdf');
})->name('unlock_pdf');

Route::get('/protect-pdf', function () {
    return view('protect-pdf');
})->name('protect-pdf');

Route::get('/sign-pdf', function () {
    return view('sign-pdf');
})->name('sign-pdf');

