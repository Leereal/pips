<?php

use Illuminate\Support\Facades\Route;
use App\Models\Settings;
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
require __DIR__.'/home.php';
require __DIR__.'/admin.php';
require __DIR__.'/user.php';

//activate and deactivate Online Trader
// Route::any('/activate', function () {
// 	return view('activate.index',[
// 		'settings' => Settings::where('id','1')->first(),
// 	]);
// });

Route::any('/revoke', function () {
	return view('revoke.index');
});
