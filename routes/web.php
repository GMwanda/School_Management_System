<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Auth;
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

// Route::prefix('admin')->middleware('auth')->group(function () {
// });

Route::get('/', 'App\Http\Controllers\parentController@index')->name('index');

Route::get('/contact', 'App\Http\Controllers\parentController@contact')->name('contact');

Route::get('/courses', 'App\Http\Controllers\parentController@courses')->name('courses');

Route::get('/LoginPortal', [App\Http\Controllers\parentController::class, 'LoginPortal'])->name('LoginPortal');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'stdHome'])->name('home');

Route::get('/admini', [App\Http\Controllers\HomeController::class, 'admini'])->name('admini');

//Route::get('/Staff', [App\Http\Controllers\parentController::class, 'staffHome'])->name('staffHome')->middleware('auth', 'is_admin');
Route::get('/Staff', [App\Http\Controllers\parentController::class, 'staffHome'])->name('staffDashboard');

Route::get('/attendance', function () {
    return view('StaffViews.Attendance');

})->name('attendance');

Route::get('/markAttendance', function () {
    return view('StaffViews.updateAttendance');
})->name('updateAttendance');

Route::get('/blah', [StaffController::class, 'defaultView']);
