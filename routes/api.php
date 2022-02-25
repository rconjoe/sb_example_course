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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::get('/students', function () {
  return Student::all();
});

Route::post('/students', function () {
  Student::create([
    'studentId' => request('studentId'),
    'firstName' => request('firstName'),
    'lastName' => request('lastName'),
    'email' => request('email'),
    'present' => request('present'),
  ]);
});

Route::put('/students/{studentId}', function ($id) {

  $student = Student::find($id);
  $student->update([
    'present' => request('present')
  ]);
});
