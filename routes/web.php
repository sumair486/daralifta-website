<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    ContactController,
    ProfileController,
    MailSettingController,
};
use App\Http\Controllers\DonationController;
use App\Http\Controllers\WebControllerr;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Models\QuestionModel;
use App\Models\Answer;
use App\Http\Controllers\DashboardController;



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


Route::get('/admin', function () {
    return view('welcome');
});


// Route::get('/test-mail',function(){

//     $message = "Testing mail";

//     \Mail::raw('Hi, welcome!', function ($message) {
//       $message->to('ajayydavex@gmail.com')
//         ->subject('Testing mail');
//     });

//     dd('sent');

// });


Route::get('/dashboard', function () {
    return view('front.dashboard');
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
// Route::get('/admin/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('admin.dashboard');


Route::get('admin/dashboard',[DashboardController::class,'index'])->middleware(['auth'])->name('admin.dashboard');
Route::get('admin/dashboard',[DashboardController::class,'today'])->middleware(['auth'])->name('admin.dashboard');
// Route::get('/admin.dashboard',[DashboardController::class,'week'])->middleware(['auth'])->name('admin.dashboard');


require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController');


        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');
});

Route::get('/',[WebControllerr::class,'main'])->name('home');
Route::post('/home',[WebControllerr::class,'main_contact']);
Route::get('/contact',[WebControllerr::class,'contact_show']);
Route::get('/delete-contact/{id}',[WebControllerr::class,'contact_delete']);
Route::get('/contact-seen/{id}',[WebControllerr::class,'seen']);
Route::get('/question',[WebControllerr::class,'question']);
Route::get('/previousquestion/{id}',[WebControllerr::class,'previous']);


//donation
Route::get('donation_page',[DonationController::class,'donation_page']);

Route::get('/donation',[DonationController::class,'donation_show']);
Route::post('/donation_upload',[DonationController::class,'donation_upload']);

Route::get('/delete-donation/{id}',[DonationController::class,'donation_delete']);
Route::get('/donation-seen/{id}',[DonationController::class,'seen']);

//question
Route::get('/question_show',[QuestionController::class,'question_show']);
Route::post('/question_upload',[QuestionController::class,'question_upload']);
Route::get('/question-seen/{id}',[QuestionController::class,'seen']);
Route::get('/delete-question/{id}',[QuestionController::class,'question_delete']);

//answer
Route::get('/answer_show',[AnswerController::class,'answer_show']);
// Route::get('/quest_show',[AnswerController::class,'category_show']);

Route::post('/answer_upload',[AnswerController::class,'answer_upload']);
Route::get('/answer-seen/{id}',[AnswerController::class,'seen']);
Route::get('/delete-answer/{id}',[AnswerController::class,'answer_delete']);
Route::get('/edit-answer/{id}',[AnswerController::class,'edit']);
Route::put('answer_update',[AnswerController::class,'update']);


//front website answer

Route::get('/answer',[AnswerController::class,'show_front']);




//dasshboard
Route::get('/admin.dashboard',[DashboardController::class,'today']);

//category
Route::get('categories',[CategoryController::class,'index'])->name('category.list');
Route::get('category/add',[CategoryController::class,'create'])->name('category.create');
Route::post('category/add',[CategoryController::class,'store'])->name('category.store');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/edit/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');

//cat_related_questions

Route::get('category_view/{id}',[AnswerController::class,'cat_related_questions'])->name('category.related');
























