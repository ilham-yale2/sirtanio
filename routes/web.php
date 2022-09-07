<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Events\Registered;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OpimageController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OpreasonController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResellerController;

/*
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('storagelink', function () {
    Artisan::call('storage:link');
});

// FRONTEND
Route::get('/promotion', [HomeController::class, 'promotion'])->name('user.promotion');


Route::post('promotion', [HomeController::class, 'saveParticipant'])->name('user.participant.store');
Route::post('reseller', [HomeController::class, 'submitReseller'])->name('user.reseller.store');

Route::get('/', [HomeController::class, 'landing']);
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/article', [HomeController::class,'article']);
Route::get('/article/{article:slug}', [HomeController::class,'article_detail']);
Route::get('/article/category/{name}', [HomeController::class,'article_category'])->name('article.category');
Route::get('/about', [HomeController::class,'about']);
Route::get('/products', [HomeController::class,'products']);
Route::get('/opportunity', [HomeController::class,'opportunity']);
// FRONTEND
Route::middleware(['auth'])->group(function () {
    Route::resource('/admin/general', GeneralController::class);
    Route::get('/admin/categories', [CategoryController::class, 'index']);
    Route::post('/admin/categories/store', [CategoryController::class, 'store'])->name('categories.store');

    Route::resource('/admin/contact', ContactController::class);
    Route::resource('/admin/product', ProductController::class);
    Route::resource('/admin/article', ArticleController::class);
    Route::resource('/admin/team', TeamController::class);
    Route::resource('/admin/opportunity_image', OpimageController::class);
    Route::resource('/admin/opportunity_reason', OpreasonController::class);
    Route::resource('/admin/benefit', BenefitController::class);
    Route::resource('/admin/home', LandingController::class);

    Route::get('admin/about',[AboutController::class, 'index']);
    Route::put('admin/about/update/{about:id}',[AboutController::class, 'update'])->name('about.update');
    Route::resource('/admin/partner', PartnerController::class);
    Route::post('/admin/partner/position', [PartnerController::class, 'position']);
    Route::resource('/admin/journey', JourneyController::class);

    Route::get('admin/opportunity_reason/{opreason:id}/edit',[OpreasonController::class, 'edit']);
    Route::get('admin/opportunity_image/{opimage:id}/edit',[OpimageController::class, 'edit']);

    Route::post('/admin/opportunity_image/image/{id}', [OpimageController::class, 'imgdel'])->name('img.delete');


    Route::get('/admin/slider', [LandingController::class , 'slider']);
    Route::post('/admin/slider/store', [LandingController::class , 'slider_store'])->name('slider.store');
    Route::get('/admin/slider/{id}/edit', [LandingController::class , 'slider_edit']);
    Route::put('/admin/slider/update/{id}', [LandingController::class , 'slider_update'])->name('slider.update');
    Route::delete('/admin/slider/delete/{id}', [LandingController::class , 'slider_delete'])->name('slider.delete');

    Route::get('/admin/message', [MessageController::class , 'index']);
    Route::get('/admin/message/show/{message:id}', [MessageController::class , 'show'])->name('message.show');

    Route::delete('/admin/message/delete/{id}', [MessageController::class , 'destroy'])->name('message.destroy');
    Route::get('/admin/message/send-email/{message:id}', [MessageController::class, 'sendMail'])->name('message.reply');

    Route::get('/admin',[AuthController::class, 'index']);
    Route::put('/admin',[AuthController::class,'password']);

    Route::resource('/admin/participant', ParticipantController::class);
    Route::get('admin/participant-excel', [ParticipantController::class, 'exportExcel'])->name('export-participant');
    Route::get('admin/reseller-excel', [ResellerController::class, 'exportExcel'])->name('export-reseller');
    Route::resource('admin/reseller', ResellerController::class);
    Route::resource('admin/promotion', PromotionController::class);
});
Route::post('/admin/message/store', [MessageController::class , 'store'])->name('message.store');
Route::get('/login',[LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
