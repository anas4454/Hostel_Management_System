<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\WardenController;
use App\Http\Controllers\WebController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\ParentMiddleware;
use App\Http\Middleware\StudentMiddleware;
use App\Http\Middleware\WardenMiddleware;
use Illuminate\Support\Facades\Route;


//?________________________________________________________________________________
//*  web-pages Routes
//?________________________________________________________________________________


Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/facilities', [WebController::class, 'facilities'])->name('facilities');
Route::get('/work', [WebController::class, 'work'])->name('work');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');


//?________________________________________________________________________________
//*  Admin-Dashboard Routes
//?________________________________________________________________________________

Route::prefix('admin')->middleware(['auth' ,'verified' , AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/complaints', [AdminController::class, 'adminComplaints'])->name('admin.complaints');
    Route::get('/fee-payment', [AdminController::class, 'adminFeePayment'])->name('admin.fee-payment');
    Route::get('/room', [AdminController::class, 'adminRoomView'])->name('admin.room');
    Route::get('/wardens', [AdminController::class, 'wardens'])->name('admin.wardens');
    Route::get('/add-wardens', [AdminController::class, 'addWardens'])->name('admin.add-wardens');
    Route::post('/add-warden', [AdminController::class, 'addWarden'])->name('admin.add-warden');

    Route::get('/setting', [AdminController::class, 'adminSetting'])->name('admin.setting');
});


//?________________________________________________________________________________
//*  Student-Dashboard Routes
//?________________________________________________________________________________

Route::prefix('student')->middleware(['auth' ,'verified' , StudentMiddleware::class])->group(function () {
    Route::get('/dashboard', [StudentController::class, 'index'])->name('student.dashboard');


    Route::get('/complaints', [StudentController::class, 'complaints'])->name('student.complaints');
    Route::get('/new-complaint', [StudentController::class, 'newComplaint'])->name('student.new-complaint');
    Route::post('/new-complaint', [StudentController::class, 'storeComplaint'])->name('student.store-complaint');

    Route::get('/fee-payment', [StudentController::class, 'feePayment'])->name('student.fee-payment');
    Route::get('/new-fee', [StudentController::class, 'newFee'])->name('student.new-fee');
    Route::post('/new-fee', [StudentController::class, 'storeFee'])->name('student.store-fee');

    Route::get('/leave', [StudentController::class, 'leave'])->name('student.leave');
    Route::get('/new-leave', [StudentController::class, 'newLeave'])->name('student.new-leave');
    Route::post('/new-leave', [StudentController::class, 'storeLeave'])->name('student.store-leave');

    Route::get('/room-booking', [StudentController::class, 'roomBooking'])->name('student.room-booking');
    Route::get('/profile', [StudentController::class, 'profile'])->name('student.profile');
    Route::get('/mess-management', [StudentController::class, 'messManagement'])->name('student.mess-management');
});


//?________________________________________________________________________________
//*  warden-Dashboard Routes
//?________________________________________________________________________________

Route::prefix('warden')->middleware(['auth' ,'verified' ,  WardenMiddleware::class])->group(function () {
    Route::get('/dashboard', [WardenController::class, 'index'])->name('warden.dashboard');
    Route::get('/complaints', [WardenController::class, 'complaints'])->name('warden.complaints');
     Route::get('/students', [WardenController::class, 'students'])->name('warden.students');
    Route::get('/fee-payment', [WardenController::class, 'feePayment'])->name('warden.fee-payment');
    Route::get('/leave-approval', [WardenController::class, 'leave'])->name('warden.leave-approval');
    Route::get('/room-approval', [WardenController::class, 'roomApproval'])->name('warden.room-approval');
});


//?________________________________________________________________________________
//*  parent-Dashboard Routes
//?________________________________________________________________________________

Route::prefix('parent')->middleware(['auth' ,'verified' , ParentMiddleware::class])->group(function () {
    Route::get('/dashboard', [ParentsController::class, 'index'])->name('parent.dashboard');
    Route::get('/leave-status', [ParentsController::class, 'leaveStatus'])->name('parent.leave-status');
    Route::get('/fee-status', [ParentsController::class, 'feeStatus'])->name('parent.fee-status');
    Route::get('/visitors', [ParentsController::class, 'visitors'])->name('parent.visitors');
});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
