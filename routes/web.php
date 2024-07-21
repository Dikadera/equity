<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/trackingPage', function () {
    return view('trackingPage');
});
//store user
Route::post('store', [UserController::class, 'store'])->name('store_user');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//shipment details
Route::get('/search', [UserController::class, 'search'])->name('search');

// Route::get('/trackShipment/{trackingID}', [UserController::class, 'trackShipment'])->name('trackShipment');
// Route::post('/shipments/{trackingID}', [UserController::class, 'viewByTrackingId'])->name('viewShipmentByTrackingId');

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');

    //create shipment VIEW
    Route::get('/admin/track', [AdminController::class, 'admin_track'])->name('admin_track');

    //create shipment ACTION
    Route::post('/tracking', [AdminController::class, 'tracking'])->name('tracking');
    // TRACK LIST
    Route::get('/trackList', [AdminController::class, 'trackList'])->name('trackList');
    //edit Shipment view
    Route::get('/editShipment/{id}', [AdminController::class, 'editShipment'])->name('editShipment');
    //update shipment
    Route::post('/updateShipment/{id}', [AdminController::class, 'updateShipment'])->name('updateShipment');













    //user list
    // Route::get('/admin/userList', [AdminController::class, 'userList'])->name('userList');

    // //adduser view

    // Route::get('/admin/addUser', [AdminController::class, 'addUser'])->name('addUser');
    // //adduser action
    // Route::post('add_User', [AdminController::class, 'add_User'])->name('add_User');
    // //to delete a user
    // Route::get('/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');
    // //Booking View
    // Route::get('/bookings', [AdminController::class, 'bookings'])->name('bookings');
    // //to delete a booking
    // Route::get('/deleteBooking/{id}', [AdminController::class, 'deleteBooking'])->name('deleteBooking');
});
