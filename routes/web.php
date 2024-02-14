<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PersonalDetailController;
use App\Http\Controllers\PlaceOfWorkController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PdfController;

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

Route::get('sign_in', function () {
    return view('frontend.login.login');
});
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

*/

require __DIR__.'/auth.php';

//site route
Route::get('/', [SiteController::class, 'index']);
Route::post('/contact', [SiteController::class, 'create'])->name('contact_me');

//admin routes

Route::get('admin', [AdminController::class, 'index'])->middleware(['auth'])->name('dashboard')->middleware('auth');

//personal_detail route

Route::get('admin/details', [PersonalDetailController::class, 'index'])->name('details')->middleware('auth');
Route::get('admin/details/create', [PersonalDetailController::class, 'create'])->name('create_details')->middleware('auth');
Route::post('admin/details/store', [PersonalDetailController::class, 'store'])->name('store_details')->middleware('auth')->middleware('auth');


//references route

Route::get('admin/references', [ReferenceController::class, 'index'])->name('references')->middleware('auth')->middleware('auth');
Route::get('admin/references/create', [ReferenceController::class, 'create'])->name('create_references')->middleware('auth')->middleware('auth');
Route::post('admin/references/store', [ReferenceController::class, 'store'])->name('store_references')->middleware('auth')->middleware('auth');
Route::get('admin/references/{id}/edit', [ReferenceController::class, 'edit'])->name('edit_references')->middleware('auth')->middleware('auth');
Route::PUT('admin/references/{id}/update', [ReferenceController::class, 'update'])->name('update_references')->middleware('auth')->middleware('auth');
Route::delete('admin/references/{id}/delete', [ReferenceController::class, 'destroy'])->name('delete_references')->middleware('auth')->middleware('auth');


//interest and hobbies route

Route::get('admin/interests', [InterestController::class, 'index'])->name('interests')->middleware('auth')->middleware('auth');
Route::get('admin/interests/create', [InterestController::class, 'create'])->name('create_interests')->middleware('auth')->middleware('auth');
Route::post('admin/interests/store', [InterestController::class, 'store'])->name('store_interests')->middleware('auth')->middleware('auth');
Route::get('admin/interests/{id}/edit', [InterestController::class, 'edit'])->name('edit_interests')->middleware('auth')->middleware('auth');
Route::PUT('admin/interests/{id}/update', [InterestController::class, 'update'])->name('update_interests')->middleware('auth')->middleware('auth');
Route::delete('admin/interests/{id}/delete', [InterestController::class, 'destroy'])->name('delete_interests')->middleware('auth')->middleware('auth');


//language route

Route::get('admin/languages', [LanguageController::class, 'index'])->name('languages')->middleware('auth');
Route::get('admin/languages/create', [LanguageController::class, 'create'])->name('create_languages')->middleware('auth');
Route::post('admin/languages/store', [LanguageController::class, 'store'])->name('store_languages')->middleware('auth');
Route::get('admin/languages/{id}/edit', [LanguageController::class, 'edit'])->name('edit_languages')->middleware('auth');
Route::PUT('admin/languages/{id}/update', [LanguageController::class, 'update'])->name('update_languages')->middleware('auth');
Route::delete('admin/languages/{id}/delete', [LanguageController::class, 'destroy'])->name('delete_languages')->middleware('auth');



//Image route

Route::get('admin/images', [ImageController::class, 'index'])->name('images')->middleware('auth');
Route::get('admin/images/create', [ImageController::class, 'create'])->name('create_images')->middleware('auth');
Route::post('admin/images/store', [ImageController::class, 'store'])->name('store_images')->middleware('auth');
Route::get('admin/images/{id}/edit', [ImageController::class, 'edit'])->name('edit_images')->middleware('auth');
Route::put('admin/images/{id}/update', [ImageController::class, 'update'])->name('update_images')->middleware('auth');
Route::delete('admin/images/{id}/delete', [ImageController::class, 'destroy'])->name('destroy_images')->middleware('auth');



//Place of work route

Route::get('admin/place_of_works', [PlaceOfWorkController::class, 'index'])->name('place_of_work')->middleware('auth');
Route::get('admin/place_of_works/create', [PlaceOfWorkController::class, 'create'])->name('create_place_of_work')->middleware('auth');
Route::post('admin/place_of_works/store', [PlaceOfWorkController::class, 'store'])->name('store_place_of_work')->middleware('auth');
Route::get('admin/place_of_works/{id}/edit', [PlaceOfWorkController::class, 'edit'])->name('edit_place_of_work')->middleware('auth');
Route::put('admin/place_of_works/{id}/update', [PlaceOfWorkController::class, 'update'])->name('update_place_of_work')->middleware('auth');
Route::delete('admin/place_of_works/{id}/delete', [PlaceOfWorkController::class, 'destroy'])->name('destroy_place_of_work')->middleware('auth');

//contact route

Route::get('admin/contacts', [ContactController::class, 'index'])->name('contacts')->middleware('auth');
Route::delete('admin/contacts/{id}/delete', [ContactController::class, 'destroy'])->name('destroy_contacts')->middleware('auth');

// Pdf route

Route::get('admin/pdf', [PdfController::class, 'index'])->name('pdf')->middleware('auth')->middleware('auth');
Route::get('admin/pdf/create', [PdfController::class, 'create'])->name('create_pdf')->middleware('auth')->middleware('auth');
Route::post('admin/pdf/store', [PdfController::class, 'store'])->name('store_pdf')->middleware('auth')->middleware('auth');
