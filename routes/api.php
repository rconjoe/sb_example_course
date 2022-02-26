<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Returns a collection of all students
Route::get('/students', function () {
  return Student::all();
});

// Student creation via POST endpoint
Route::post('/students', function () {
  Student::create([
    'studentId' => request('studentId'),
    'firstName' => request('firstName'),
    'lastName' => request('lastName'),
    'email' => request('email'),
    'present' => request('present'),
  ]);
});

// Use this endpoint to update attendance
Route::put('/students/{studentId}', function ($id) {
  request()->validate([
    'present' => 'required'
  ]);

  $student = Student::find($id);
  $student->update([
    'present' => request('present')
  ]);
});

// Student deletion endpoint
Route::delete('/students/{studentId}', function ($id) {

  $student = Student::find($id);
  $success = $student->delete();
  return [
    'success' => $success
  ];
});

Route::post('/populateDatabase', function ($amount) {
  Student::factory()->times($amount)->create();
});
