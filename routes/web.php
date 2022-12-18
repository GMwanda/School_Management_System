<?php

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    parentController,
    HomeController,
    StaffController
};

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
Auth::routes();
// {SCREENS AVAILABLE WITHOUR LOGIN}
Route::get('/', parentController::class)->name(name: 'index');
Route::get('/contact', parentController::class)->name(name: 'contact');
Route::get('/courses', parentController::class)->name(name: 'courses');
Route::get('/LoginPortal', parentController::class)->name(name: 'LoginPortal');

// {STUDENT HOME SCREEN}
Route::get('/home', [HomeController::class, 'stdHome'])->name('home')->middleware('auth', 'is_admin');




//                                  {LOGGED IN STAFF SCREENS @NYAMO}
//Route::get('/Staff', [App\Http\Controllers\parentController::class, 'staffHome'])->name('staffHome')->middleware('auth', 'is_admin');
//Route::get('/Staff', [App\Http\Controllers\parentController::class, 'staffHome'])->name('staffDashboard');
//Staff dashboard view
Route::get('/Staff', [StaffController::class, 'defaultView'])->name(name: 'staffDashboard');
//Staff coursework view
// Route::get('/coursework', function(){
//     return view('StaffViews.Coursework');
// })->name('coursework');
// Show courses teaching
Route::get('/coursework', [StaffController::class, 'showtempcourseWorkMarks'])->name('tempcourseworkMarks.show');
//Show functions in a particular course
Route::get('/coursework/{courseName}', [StaffController::class, 'showCourseworkFunctions'])->name('courseworkFunctions.show');
//Add courswork content/notes to a particular course
Route::get('coursework/{courseName}/addNotes', function () {
    return view('StaffViews.addNotes');
})->name('addNotes');
//Make an announcement for a particular group of students
Route::get('coursework/{courseName}/announcement', function () {
    return view('StaffViews.announcements');
})->name('announcements');
// Show form to update marks
Route::get('/coursework/{courseName}/update-marks', [StaffController::class, 'showCourseWorkMarks'])->name('courseMarks.update');
// Route to handle student marks form post method
Route::post('/coursework/update-marks', [StaffController::class, 'updateMarks']);
// Show attendance view
Route::get('/attendance', [StaffController::class, 'attendance'])->name('Attendance');
// Update attendance view
Route::get('/attendance/{courseName}/update-attendance', [StaffController::class, 'markAttendanceView'])->name('Attendance.markAttenanceView');
// Update attendance route
Route::post('/attendance/update-attendance', [StaffController::class, 'updateAttendance'])->name('Attendance.updateAttendance');
