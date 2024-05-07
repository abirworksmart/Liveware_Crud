<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateCustomer;
use App\Livewire\Customerss;
use App\Livewire\ViewCustomer;
use App\Livewire\EditCustomer;


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

Route::get('/customers/create', CreateCustomer::class)->name('create.customer');
Route::get('/customer', Customerss::class);
Route::get('/customer/view/{id}', ViewCustomer::class);
Route::get('/customer/edit/{id}', EditCustomer::class);
