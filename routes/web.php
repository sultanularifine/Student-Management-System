<?php
use App\Http\Controllers\StudentInfoController;
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
    return view('welcome');
});
Route::get('/student-info', [StudentInfoController::class, 'index'] )->name('studentinfo.index');
Route::get('/student-info/add', [StudentInfoController::class, 'create'] )->name('studentinfo.create');
Route::post('/student-info', [StudentInfoController::class, 'store'] )->name('studentinfo.store');

//login route
Route::get('/student-info/form', [StudentInfoController::class, 'Form'] )->name('studentinfo.form');
Route::get('/student-info/register', [StudentInfoController::class, 'register'] )->name('studentinfo.register');
Route::post('/student-info/register', [StudentInfoController::class, 'registerStore'] )->name('studentinfo.registerStore');
Route::post('/student-info/login', [StudentInfoController::class, 'login'] )->name('studentinfo.login');

Route::get('/student-info/{id}', [StudentInfoController::class,'edit'])->name('studentinfo.edit');
Route::get('/student-info/view/{id}', [StudentInfoController::class,'view'])->name('studentinfo.view');
Route::put('/student-info/{id}', [StudentInfoController::class,'update'])->name('studentinfo.update');
Route::delete('/student-info/{id}', [StudentInfoController::class,'destroy'])->name('studentinfo.destroy');

Route::get('/employee/pdf', [StudentInfoController::class, 'createPDF']);