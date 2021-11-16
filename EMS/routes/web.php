<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CompanieController;


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

//--------------Dashboard--------------------
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/dashboard/employee', function () { return view('dashboard.employee.employees');});
Route::get('/dashboard/company', function () { return view('dashboard.Companie.company');});



//-------------Dashboard Employee--------------
Route::get('/dashboard/employee', [EmployeeController::class, 'index'])->name('Employee');
Route::get('/dashboard/employee/add', [EmployeeController::class, 'create'])->name('Add Employee');
Route::post('/dashboard/employee/store', [EmployeeController::class, 'store']);
Route::get('/dashboard/employeeedit/{id}', [EmployeeController::class, 'edit'])->name('edit');
Route::delete('/empdelete/{id}', [EmployeeController::class, 'destroy'])->name('deleted');
Route::put('/employeeupdate/{id}', [EmployeeController::class, 'update']);



//-------------Dashboard Companie--------------
Route::get('/dashboard/company', [CompanieController::class, 'index'])->name('Companies');
Route::get('/dashboard/company/add', [CompanieController::class, 'create'])->name('Add Companie');
Route::post('/dashboard/company/store', [CompanieController::class, 'store']);
Route::get('/dashboard/companyedit/{id}', [CompanieController::class, 'edit'])->name('edit');
Route::put('/companyupdate/{id}', [CompanieController::class, 'update']);
Route::delete('/delete/{id}', [CompanieController::class, 'destroy']);

