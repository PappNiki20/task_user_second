<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/tasks', [TaskController::class, 'index']);
/* GET -1 /api/task/1 */
Route::get('/api/tasks/{id}', [TaskController::class, 'show']);
/* POST
/api/task */
Route::post('/api/tasks', [TaskController::class, 'store']);
/* PUT
/api/task/1 */
Route::put('/api/tasks/{id}', [TaskController::class, 'update']);
/* DELETE
/api/task/1 */
Route::delete('/api/tasks/{id}'
, [TaskController::class, 'destroy']);
/* User API végpontok és feladatok
GET - all /api/users */ Route::get('/api/users', [UserController::class, 'index']);

Route::get('/task/new', [TaskController::class, 'newView']);
Route::get('/task/edit/{id}', [TaskController::class, 'editView']);

Route::get('/task/list', [TaskController::class, 'listView']);


Route::get('/api/user', [UserController::class, 'index']);
/* GET -1 /api/task/1 */
Route::get('/api/user/{id}', [UserController::class, 'show']);
/* POST
/api/task */
Route::post('/api/user', [UserController::class, 'store']);
Route::get('/users/list', [UserController::class, 'listView']);