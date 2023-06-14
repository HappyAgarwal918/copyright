<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\takedownController;
use App\Http\Controllers\WebsitesController;
use App\Http\Controllers\WorksController;
use App\Http\Controllers\WorksOverviewController;
use App\Http\Controllers\TakedownsController;
use App\Http\Controllers\SpyController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\Auth\LoginController;

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

Auth::routes(['verify' => true]);

/* ---------------------- */
// Route::get('/', function () {
//     return view('frontend.index');
// })->name('index');
Route::get('/', [LoginController::class,'index'])->name('index');

require __DIR__.'/auth.php';

/* ------------- Stripe Payment ------------- */

Route::get('purchase/{id}',[PaymentController::class,'purchase'])->name('purchase');
Route::post('payment',[PaymentController::class,'payment'])->name('payment');

/* ------------- Recaptcha ------------- */

Route::post('send_contact', [ContactController::class, 'send_contact'])->name('send_contact');

/* ---------------------- */


/*-------- Frontend Pages -------*/

Route::get('protect-websites', [FrontendController::class,'protect'])->name('protect-websites');
Route::get('copyright-works', [FrontendController::class,'copyright'])->name('copyright-works');
Route::get('professional-takedowns', [FrontendController::class,'takedown'])->name('professional-takedowns');
Route::get('affiliates', [FrontendController::class,'affiliates'])->name('affiliates');
Route::get('pricing',[PricingController::class,'pricing'])->name('pricing');
Route::get('refund',[FrontendController::class,'refund'])->name('refund');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::get('affiliates/faq',[FrontendController::class,'faq'])->name('faq');
Route::get('privacy',[FrontendController::class,'privacy'])->name('privacy');
Route::get('terms',[FrontendController::class,'terms'])->name('terms');


/*-------- Certificate Pages -------*/

Route::get('work/certificate/{id}',[CertificateController::class,'certificate'])->name('certificate');
Route::get('website/certificate/{id}',[CertificateController::class,'websitecertificate'])->name('websitecertificate');


/*-----------------------------*/

Route::group(['middleware' => 'verified'], function() {

    /*-------- Work Pages -------*/

    Route::get('/works/manage', function () {
        return view('AuthPages.Works.my-works');
    })->name('work');

    Route::group(['prefix' => 'works/registration'], function () {
        Route::get('/', function () { return view('AuthPages.Works.registration'); })->name('registration');

        Route::get('/digital-content/{id}', function () { return view('AuthPages.Works.digital-content'); })->name('digital-content');
        Route::post('/digital-content/{id}',[WorksController::class,'dc'])->name('digital-content');

        Route::get('/literary-works/{id}', function () { return view('AuthPages.Works.literary-works'); })->name('literary-works');
        Route::post('/literary-works/{id}',[WorksController::class,'lw'])->name('literary-works');

        Route::get('/motion-pictures/{id}', function () { return view('AuthPages.Works.motion-pictures'); })->name('motion-pictures');
        Route::post('/motion-pictures/{id}',[WorksController::class,'mp'])->name('motion-pictures');

        Route::get('/performing-arts/{id}', function () { return view('AuthPages.Works.performing-arts'); })->name('performing-arts');
        Route::post('/performing-arts/{id}',[WorksController::class,'pa'])->name('performing-arts');

        Route::get('/photographs/{id}', function () { return view('AuthPages.Works.photographs'); })->name('photographs');
        Route::post('/photographs/{id}',[WorksController::class,'photo'])->name('photographs');

        Route::get('/visual-arts/{id}', function () { return view('AuthPages.Works.visual-arts'); })->name('visual-arts');
        Route::post('/visual-arts/{id}',[WorksController::class,'va'])->name('visual-arts');

        Route::post('/publication/{id}',[WorksController::class,'register'])->name('publication');

        Route::get('/publication/{id}', function () { return view('AuthPages.Works.publication'); })->name('publication');
        Route::post('/limitation/{id}',[WorksController::class,'savepublication'])->name('limitation');

        Route::get('/limitation/{id}', function () { return view('AuthPages.Works.limitation'); })->name('limitation');
        Route::post('/authors/{id}',[WorksController::class,'savelimitation'])->name('authors');

        Route::get('/authors/{id}', function () { return view('AuthPages.Works.authors'); })->name('authors');
        Route::post('/owners/{id}',[WorksController::class,'saveauthors'])->name('owners');
        Route::get('/delete-author/{id}', [WorksController::class,'destroyauthor'])->name('deleteauthor');

        Route::get('/author/{id}', [WorksController::class,'addauthor'])->name('addauthor');
        Route::post('/save-work-authors',[WorksController::class,'saveworkauthor'])->name('saveworkauthor');

        Route::get('/owners/{id}', function () { return view('AuthPages.Works.owners'); })->name('owners');
        Route::post('/files/{id}',[WorksController::class,'saveowners'])->name('files');
        Route::get('delete-owner/{id}', [WorksController::class,'destroyowner'])->name('deleteowner');

        Route::get('/owner/{id}', [WorksController::class,'addowner'])->name('addowner');
        Route::post('/save-work-owner',[WorksController::class,'saveworkowner'])->name('saveworkowner');

        Route::get('/files/{id}', function () { return view('AuthPages.Works.files'); })->name('files');
        
        Route::get('/upload/{id}', [WorksController::class,'uploadfiles'])->name('upload');
        Route::post('/save-work-files',[WorksController::class,'saveworkfiles'])->name('saveworkfiles');
        
        Route::get('/file/{pid}/{id}', [WorksOverviewController::class,'editfilename'])->name('editfilename');
        Route::post('/newfilename/{pid}/{id}', [WorksOverviewController::class,'savenewfilename'])->name('savenewfilename');

        Route::get('/general/{id}', [WorksOverviewController::class,'editwork'])->name('editwork');
        Route::post('/edit_work/{id}', [WorksOverviewController::class,'workedited'])->name('work-edited');
    });

    Route::post('works/view/{id}',[WorksController::class,'savefiles'])->name('work-overview');
    Route::get('works/view/incomplete/{id}',[WorksController::class,'incomplete'])->name('overview-incomplete');
    Route::get('works/view/{id}',[WorksController::class,'complete'])->name('work-overview');

    Route::get('work/delete/{id}', [WorksOverviewController::class,'destroy'])->name('deletework');
    Route::get('works/view/badge/{id}',[WorksOverviewController::class,'overviewbadge'])->name('overviewbadge');
    Route::get('work/select/badge/{id}',[WorksOverviewController::class,'selectworkbadge'])->name('selectworkbadge');
    Route::get('works/view/details/{id}',[WorksOverviewController::class,'overviewdetail'])->name('overviewdetail');
    Route::get('works/files/manage/{id}',[WorksOverviewController::class,'overviewfiles'])->name('overviewfiles');
    Route::get('works/files/view/{pid}/{id}',[WorksOverviewController::class,'fileview'])->name('fileview');
    Route::get('works/files/delete/{pid}/{id}', [WorksOverviewController::class,'destroyfiles'])->name('deleteworkfiles');

    /*----------- Settings ------------*/
    Route::get('users/settings',[SettingController::class,'settings'])->name('settings');
    Route::post('users/settings/emailupdate',[SettingController::class,'update_profile'])->name('emailupdate');
    Route::post('users/settings/passwordupdate',[SettingController::class,'update_password'])->name('passwordupdate');
    Route::post('users/edit',[SettingController::class,'profilepost'])->name('profile');
    Route::get('billing/payments/view-invoice/{id}/{uniqid}',[SettingController::class,'viewinvoice'])->name('viewinvoice');


    /*-------- Billing --------*/
    Route::get('billing/payments/invoice/{id}/{uniqid}',[PricingController::class,'billing'])->name('billing');
    Route::post('billing/payments/invoice/{id}/{uniqid}',[PricingController::class,'takedownbilling'])->name('billing');
    Route::post('billing/payments/thankyou',[PricingController::class,'confirm'])->name('thankyou');

    /*-------- Website Pages -------*/
    Route::get('/websites/manage', function () {
        return view('AuthPages.Website.my-websites');
    })->name('websites');
    Route::get('websites/protect',[WebsitesController::class,'index'])->name('protectwebsites1');
    Route::post('websites/protect/verify/{uniqid}',[WebsitesController::class,'saveurl'])->name('protectwebsites2');
    Route::get('websites/protect/verify/{uniqid}',[WebsitesController::class,'metapage'])->name('protectwebsites2');
    Route::post('websites/view/{uniqid}',[WebsitesController::class,'verify'])->name('websites-view');
    Route::get('websites/view/{uniqid}',[WebsitesController::class,'websiteoverview'])->name('websites-view');
    Route::get('websites/view/badge/{uniqid}',[WebsitesController::class,'websitebadge'])->name('websitebadge');
    Route::get('websites/select/badge',[WebsitesController::class,'selectwebsitebadge'])->name('selectwebsitebadge');
    Route::get('websites/pages/manage/{uniqid}',[WebsitesController::class,'websitepages'])->name('websitepages');
    Route::get('websites/pages/submit/{uniqid}',[WebsitesController::class,'submitpages'])->name('submitpages');
    Route::post('websites/pages/added/{uniqid}',[WebsitesController::class,'pageadded'])->name('pageadded');
    Route::get('websites/pages/{uniqid}/view/{pageid}',[WebsitesController::class,'viewpage'])->name('viewpage');
    Route::get('website/page/{uniqid}/delete/{pageid}', [WebsitesController::class,'destroypage'])->name('destroypage');
    Route::get('delete-website/{uniqid}', [WebsitesController::class,'destroywebsite'])->name('destroywebsite');

    /*-------- Takedown Pages -------*/
    Route::get('/takedowns/manage',[TakedownsController::class,'manage'])->name('takedown');
    Route::get('/takedowns/request/{id}',[TakedownsController::class,'index'])->name('takedownindex');
    Route::post('/takedowns/request/details/{id}',[TakedownsController::class,'savedetails'])->name('takedowndetails');
    Route::get('/takedowns/request/details/{id}',[TakedownsController::class,'details'])->name('takedowndetails');
    Route::post('/takedowns/request/review/{id}',[TakedownsController::class,'savereview'])->name('takedownreview');
    Route::get('/takedowns/request/review/{id}',[TakedownsController::class,'review'])->name('takedownreview');
    Route::get('/takedown-view/{id}',[TakedownsController::class,'takedownview'])->name('takedownview');
    Route::get('delete-takedown/{id}', [TakedownsController::class,'destroytakedown'])->name('destroytakedown');

    /*-------- Spy Pages -------*/
    Route::get('/websitespy/manage',[SpyController::class,'spy'])->name('spy');
    Route::get('/websitespy/lookup',[SpyController::class,'spylookup'])->name('spylookup');
    Route::post('/websitespy/view',[SpyController::class,'domaindetail'])->name('spy2');
    Route::get('/websitespy/view/{url}',[SpyController::class,'index2'])->name('spy3');


    /* Admin */
    Route::prefix('admin')->middleware(['admin'])->group(function () {
    
        /* ------------- Admin Dashboard ------------- */
        Route::prefix('dashboard')->group(function () {
            Route::get('/', [DashboardController::class,'dashboard'])->name('dashboard');
            Route::post('logo/upload', [DashboardController::class,'logoupload'])->name('logoupload');
            Route::get('edit/address', [DashboardController::class,'edit'])->name('comp_address');
            Route::post('addressedited', [DashboardController::class,'editaddress'])->name('comp_address_edited');
        });

        /* ------------- Admin Users ------------- */
        Route::prefix('user')->group(function () {
            Route::get('/', [UseradminController::class,'index'])->name('users');
            Route::get('delete/{id}', [UseradminController::class,'destroy'])->name('deleteuser');
            Route::get('edit/{id}', [UseradminController::class,'edituser'])->name('edituser');
            Route::post('edited', [UseradminController::class,'change'])->name('useredited');
            Route::get('restore/{id}', [UseradminController::class,'restore'])->name('userestore');
            Route::get('activate/{id}', [UseradminController::class,'activate'])->name('activate');
            Route::get('register',[UseradminController::class,'addnewuser'])->name('addnewuser');
            Route::post('registered',[UseradminController::class,'addUser'])->name('addUser');
        });


        /* ------------- Admin Price ------------- */
        Route::prefix('price')->group(function () {
            Route::get('/',[PriceController::class,'adminpayment'])->name('adminpayment');
            Route::get('edit/{id}',[PriceController::class,'editpricepage'])->name('editpricepage');
            Route::post('edited/{id}',[PriceController::class,'priceedited'])->name('priceedited');
            Route::post('takedown/edited/{id}',[PriceController::class,'takedownpriceedited'])->name('takedownpriceedited');
        });

        /*----------------- Admin Package -------------- */

        Route::get('subscription', [PackageController::class,'subscription'])->name('subscription');
        Route::prefix('package')->group(function () {
            Route::get('user/{id}',[PackageController::class,'editpackage'])->name('editpackage');
            Route::post('activate/{id}',[PackageController::class,'activatepackage'])->name('activatepackage');
            Route::post('paid/{id}',[PackageController::class,'packagepaid'])->name('packagepaid');
        });

        /*----------------- Admin takedown -------------- */
        Route::prefix('takedown')->group(function () {
            Route::get('/', [takedownController::class, 'takedownpackages'])->name('takedownpackages');
            Route::post('status/{id}',[takedownController::class,'statuspaid'])->name('statuspaid');
        });
    });

});