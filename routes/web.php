<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);
Route::get('services', [HomeController::class, 'services']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('add-service', [HomeController::class, 'servicesss']);
Route::post('home-page-service', [HomeController::class, 'post_services']);
Route::get('admin-home-page-service', [HomeController::class, 'admin_home_page_service']);
Route::get('edit-admin-home-service/{id}', [HomeController::class, 'edit_admin_home_service']);
Route::get('delete-admin-home-service/{id}', [HomeController::class, 'delete_admin_home_service']);
Route::post('home-page-service-update', [HomeController::class, 'update_admin_home_service']);
	
	// Faqs routs

Route::get('admin-faqs', [HomeController::class, 'admin_faqs']);
Route::get('add-faqs', [HomeController::class, 'add_faqs']);
Route::post('add-faqs', [HomeController::class, 'post_faqs']);
Route::get('edit-faqs/{id}', [HomeController::class, 'edit_faqs']);
Route::post('update-faqs', [HomeController::class, 'update_faqs']);
Route::post('dalete-faq/{id}', [HomeController::class, 'delete_faq']);


  // footer about us routes

Route::get('footer-about-us', [HomeController::class, 'footer_about_us']);
Route::get('edit-footer-about-us/{id}', [HomeController::class, 'edit_footer_about_us']);
Route::post('update-footer-about-us', [HomeController::class, 'update_footer_about_us']);
  

  // about us routes

Route::get('our-mission', [HomeController::class, 'our_mission']);
Route::get('edit-our-mission', [HomeController::class, 'edit_our_mission']);
Route::post('update-our-mission', [HomeController::class, 'update_our_mission']);


Route::get('our-vision', [HomeController::class, 'our_vision']);
Route::get('edit-our-vision', [HomeController::class, 'edit_our_vision']);
Route::post('update-our-vision', [HomeController::class, 'update_our_vision']);



Route::get('who-we-are', [HomeController::class, 'who_we_are']);
Route::get('edit-who-we-are', [HomeController::class, 'edit_who_we_are']);
Route::post('update-who-we-are', [HomeController::class, 'update_who_we_are']);



Route::get('contactt', [HomeController::class, 'contact']);
Route::get('edit-contact', [HomeController::class, 'edit_contact']);
Route::post('update-contact', [HomeController::class, 'update_contact']);