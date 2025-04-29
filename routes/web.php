
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('student.index');
});

Route::get('/student', function () {
    return view('student.index');
});

Route::get('/student/create', function () {
    return view('student.create');
});

Route::post('/student/store', function () {
    // Here you would handle the form submission
    return redirect('/student')->with('success', 'Event created successfully!');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
