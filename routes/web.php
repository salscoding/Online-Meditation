<?php

use App\Http\Controllers\ApplicationSettingsController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/cache', function () {
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:cache');
    Artisan::call('event:cache');

    $notification = array(
        'message' => 'Application cached successfully!',
        'alert-type' => 'info'
    );

    return redirect()->route('dashboard')->with($notification);
})->name('cache');

Route::get('/clear', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:forget spatie.permission.cache');

    $notification = array(
        'message' => 'Cache cleared successfully!',
        'alert-type' => 'info'
    );

    return redirect()->route('dashboard')->with($notification);
})->name('clear');

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/user/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('admin.logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// Application Settings Routes
Route::resources([
    'app-settings' => ApplicationSettingsController::class,
]);
// Application Settings Routes End

// User Routes
Route::post('users/save-layout', [UserController::class, 'saveThemeData'])->name('users.themeData');

Route::resources([
    'users' => UserController::class,
]);
// User Routes End

// Permissions Routes
Route::get('/permissions/getalldata', [PermissionController::class, 'getAllData'])->name('permissions.getAllData');

Route::resources([
    'permissions' => PermissionController::class,
]);
// Permissions Routes End

// Roles Routes

Route::resources([
    'roles' => RoleController::class,
]);
// Roles Routes End
