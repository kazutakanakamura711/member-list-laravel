<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    MemberController
};
use App\Models\Member;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MemberController::class, 'index'])->name('members');
Route::get('/members/register', [MemberController::class, 'register']);
Route::post('/members/add_register', [MemberController::class, 'add_register']);
Route::get('/members/update{id}', [MemberController::class, 'update']);
Route::post('/members/update_member', [MemberController::class, 'update_member']);
Route::get('/members/delete_member{id}', [MemberController::class, 'delete_member']);

