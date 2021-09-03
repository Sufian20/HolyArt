<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CoursessController;
use App\Http\Controllers\RegistesionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PhotoGalleyController;
use App\Http\Controllers\TeamController;
use App\Models\service;
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

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboards'); */
 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('backend.dashboard');

})->name('dashboard');

Route::get('/', [FrontendController::class, 'ForntPage'])->name('ForntPage');
//Route::get('/recnt-post', [FrontendController::class, 'RecentPost'])->name('RecentPost');
Route::post('/post-confrim-registration', [FrontendController::class, 'PostConfirmRegistration'])->name('PostConfirmRegistration');


//======================= CATEGORY ROUTE ARE HERE ======================================
Route::get('/add-category', [CategoryController::class, 'AddCategory'])->name('AddCategory');
Route::post('/post-category', [CategoryController::class, 'PostCategory'])->name('PostCategory');
Route::get('/view-category', [CategoryController::class, 'ViewCategory'])->name('ViewCategory');
Route::get('/edit-category/{e_id}', [CategoryController::class, 'EditCategory'])->name('EditCategory');
Route::post('/update-category', [CategoryController::class, 'UpdateCategory'])->name('UpdateCategory');
Route::get('/delete-category/{e_id}', [CategoryController::class, 'DeleteCategory'])->name('DeleteCategory');


// Services Area......
Route::get('/add-service', [ServiceController::class, 'AddService'])->name('AddService');
Route::post('/post-service', [ServiceController::class, 'PostService'])->name('PostService');
Route::get('/view-service', [ServiceController::class, 'ViewService'])->name('ViewService');
Route::get('/delete-service/{slug}', [ServiceController::class, 'DeleteService'])->name('DeleteService');
Route::get('/edit-service/{slug}', [ServiceController::class, 'EditService'])->name('EditService');
Route::post('/update-service', [ServiceController::class, 'UpdateService'])->name('UpdateService');
Route::get('/trash-service', [ServiceController::class, 'TrashService'])->name('TrashService');

/// About Area...
Route::get('/add-about', [AboutController::class, 'AddAbout'])->name('AddAbout');
Route::post('/post-about', [AboutController::class, 'PostAbout'])->name('PostAbout');
Route::get('/view-about', [AboutController::class, 'ViewAbout'])->name('ViewAbout');
Route::get('/delete-about/{slug}', [AboutController::class, 'DeleteAbout'])->name('DeleteAbout');
Route::get('/edit-about/{slug}', [AboutController::class, 'EditAbout'])->name('EditAbout');
Route::post('/update-about', [AboutController::class, 'UpdateAbout'])->name('UpdateAbout');


// Coursess
Route::get('/add-coursess', [CoursessController::class, 'AddCoursess'])->name('AddCoursess');
Route::post('/post-coursess', [CoursessController::class, 'PostCoursess'])->name('PostCoursess');
Route::get('/view-coursess', [CoursessController::class, 'ViewCoursess'])->name('ViewCoursess');
Route::get('/delete-coursess/{d_id}', [CoursessController::class, 'DeleteCoursess'])->name('DeleteCoursess');
Route::get('/edit-coursess/{e_id}', [CoursessController::class, 'EditCoursess'])->name('EditCoursess');
Route::post('/update-coursess', [CoursessController::class, 'UpdateCoursess'])->name('UpdateCoursess');

//======================= REGISTETON ROUTE ARE HERE ======================================

Route::get('/add_register_card', [RegistesionController::class, 'AddRegisterCard'])->name('AddRegisterCard');


//======================= Blog ROUTE ARE HERE ======================================
Route::get('/add-blog', [BlogController::class, 'AddBlog'])->name('AddBlog');
Route::post('/post-blog', [BlogController::class, 'PostBlog'])->name('PostBlog');
Route::get('/view-blog', [BlogController::class, 'ViewBlog'])->name('ViewBlog');
Route::get('/all-blog/{a_id}', [BlogController::class, 'AllBlog'])->name('AllBlog');
Route::get('/edit-all-blog/{e_id}', [BlogController::class, 'EditBlog'])->name('EditBlog');
Route::post('/update-all-blog', [BlogController::class, 'UpdateBlog'])->name('UpdateBlog');
Route::get('/delete-all-blog/{d_id}', [BlogController::class, 'DeleteBlog'])->name('DeleteBlog');

//================= Blog frontend are here ======================
Route::get('/blogpage', [FrontendController::class, 'BlogPage'])->name('BlogPage');
Route::get('/blog-details/{id}', [FrontendController::class, 'BlogDetails'])->name('BlogDetails');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});


//======================= COMMENT ROUTE ARE HERE ======================================
Route::post('/post-comment', [FrontendController::class, 'PostComment'])->name('PostComment');
Route::get('/view-comment', [FrontendController::class, 'ViewComment'])->name('ViewComment');


//================= Contact frontend are here ======================
Route::get('/contact', [FrontendController::class, 'Contact'])->name('Contact');
Route::post('/post-contact', [FrontendController::class, 'PostContact'])->name('PostContact');

//================= Photo Gelary frontend are here ======================

Route::get('/add-photo', [PhotoGalleyController::class, 'AddPhoto'])->name('AddPhoto');
Route::post('/post-photo', [PhotoGalleyController::class, 'PostPhoto'])->name('PostPhoto');
Route::get('/view-photo', [PhotoGalleyController::class, 'ViewPhoto'])->name('ViewPhoto');
Route::get('/edit-photo/{e_id}', [PhotoGalleyController::class, 'EditPhoto'])->name('EditPhoto');
Route::post('/edit-photo', [PhotoGalleyController::class, 'UpdatePhoto'])->name('UpdatePhoto');
Route::get('/delete-photo/{e_id}', [PhotoGalleyController::class, 'DeletePhoto'])->name('DeletePhoto');

Route::get('/gallerypage', [FrontendController::class, 'GalleryPage'])->name('GalleryPage');

//================= Couress frontend are here ======================
Route::get('/coursess-page', [FrontendController::class, 'CourssesPage'])->name('CourssesPage');


//============= TEAM ROUTE ARE HERE ===============
Route::get('/add-team', [TeamController::class, 'AddTeam'])->name('AddTeam');
Route::post('/post-team', [TeamController::class, 'PostTeam'])->name('PostTeam');
Route::get('/view-team', [TeamController::class, 'ViewTeam'])->name('ViewTeam');
Route::get('/delte-team/{d_id}', [TeamController::class, 'DeleteTeam'])->name('DeleteTeam');

Route::get('/team-page', [FrontendController::class, 'TeamPage'])->name('TeamPage');
