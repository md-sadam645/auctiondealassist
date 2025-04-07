<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\userAuthentication;
use App\Http\Controllers\admin\propertyController;
use App\Http\Controllers\admin\subscriptionController;
use App\Http\Controllers\admin\settingController;
use App\Http\Controllers\admin\bankController;
use App\Http\Controllers\web\joinUsController;
use App\Http\Controllers\web\paymentController;
use App\Http\Controllers\web\contactUsController;
use App\Http\Controllers\web\requestInquiryController;
use App\Http\Controllers\web\subscriberController;
use App\Http\Controllers\auth\ForgetPasswordController;

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
//start frontend page redirect route
Route::get('/listing-details', function(){
    return view('web/listing/listing_details');
});

Route::get('/about-us/index', function(){
    return view('web/aboutUs/index');
});

Route::get('/contact-us/index', function(){
    return view('web/contactUs/index');
});

Route::get('/join-us/index', function(){
    return view('web/joinUs/index');
});
//end frontend page redirect route

//start backend page redirect route
Route::get('/admin', function(){
    return view('backend/auth/login');
})->middleware('isLogin');

Route::get('/user/forget-password', function(){
    return view('backend/auth/forget_password');
});

//user login & register on mobile device
Route::get('user-login', function(){
    return view('web/auth/mobile_login');
});

Route::get('user-register', function(){
    return view('web/auth/mobile_register');
});
//end backend page redirect route 

//admin & consultant login 
Route::POST('/adminLogin', [userAuthentication::class, 'login']);

//only admin accessible routes middleware
Route::group(['middleware' => 'admin'], function() {
    //bank routes
    Route::get('/bank/index', function(){
        return view('backend/bank/index');
    });

    Route::get('/subscription/index', function(){
        return view('backend/subscription/index');
    });
    
    Route::get('/consultant/index', function(){
        return view('backend/consultant/index');
    });


    //start property routes
    Route::get('/property/approve/{id}', [propertyController::class, 'approve']);
    Route::get('/property/reject/{id}', [propertyController::class, 'reject']);

    //consultant routes
    Route::POST('/consultantAdd', [userAuthentication::class, 'index']);
    Route::get('/consultant/view', [userAuthentication::class, 'consultantView']);
    Route::get('/consultant/edit/{id}', [userAuthentication::class, 'consultantEdit']);
    Route::POST('/consultantUpdate/{id}', [userAuthentication::class, 'consultantUpdate']);
    Route::get('/consultant/delete/{id}', [userAuthentication::class, 'consultantDelete']);
    Route::get('/consultant/active/{id}', [userAuthentication::class, 'activeConsultant']);
    Route::get('/consultant/inactive/{id}', [userAuthentication::class, 'inactiveConsultant']);

    //subscription routes
    Route::POST('/newSubscription', [subscriptionController::class, 'index']);
    Route::get('/subscription/view', [subscriptionController::class, 'view']);
    Route::get('/subscription/edit/{id}', [subscriptionController::class, 'edit']); 
    Route::POST('/subscription/update/{id}', [subscriptionController::class, 'update']);
    Route::get('/subscription/delete/{id}', [subscriptionController::class, 'delete']);

    //settings routes
    Route::get('/setting/terms-conditions', [settingController::class, 'termsConditionsView']);
    Route::get('/setting/privacy-policy', [settingController::class, 'privacyPolicyView']);
    // Route::get('/setting/terms-of-use', [settingController::class, 'termsUseView']);
    Route::POST('/setting/terms-conditions/update', [settingController::class, 'index']);
    Route::POST('/setting/privacy-policy/update', [settingController::class, 'index']);
    Route::POST('/setting/term-of-use/update', [settingController::class, 'index']);

    //bank routes
    Route::Post('/addBank', [bankController::class, 'index']);
    Route::get('/bank/view', [bankController::class, 'view']);
    Route::get('/bank/edit/{id}', [bankController::class, 'edit']);
    Route::POST('/updateBank/{id}', [bankController::class, 'update']);
    Route::get('/bank/delete/{id}', [bankController::class, 'delete']);

    //contact list
    Route::get('/contact-list/view', [contactUsController::class, 'view']);
    Route::get('/contact-list/view-in-details/{id}', [contactUsController::class, 'viewInDetails']);
    Route::get('/contact-list/delete/{id}', [contactUsController::class, 'delete']);

    //contact list
    Route::get('/join-us/view', [joinUsController::class, 'view']);
    Route::get('/join-us/view-in-details/{id}', [joinUsController::class, 'viewInDetails']);
    Route::get('/join-us/delete/{id}', [joinUsController::class, 'delete']);

    //subscriber list
    Route::get('/subscriber/view', [subscriberController::class, 'view']);
    Route::get('/subscriber/delete/{id}', [subscriberController::class, 'delete']);
 
});




//Consultant & admin accessible routes middleware
Route::group(['middleware' => 'isConsultant'], function() {

    //account setting
    Route::get('/account-setting/security', function(){
        return view('backend/account/security');
    });


    //search property list by state
    Route::get('/property/search-property', [propertyController::class, 'searchPropertyByState']);

    //admin authentication 
    Route::any('/adminLogout', [userAuthentication::class, 'logout']);
    Route::get('/account-setting', [userAuthentication::class, 'AccountView']);
    Route::POST('/accountUpdate/{id}', [userAuthentication::class, 'accountUpdate']);
    Route::POST('/changePassword/{id}', [userAuthentication::class, 'changePassword']);
    Route::POST('/forgetPassword', [userAuthentication::class, 'forgetPassword']);

    //start property routes
    Route::POST('/newProperty', [propertyController::class, 'index']);
    Route::get('/property/view', [propertyController::class, 'view']); 
    Route::get('/property/edit/{id}', [propertyController::class, 'edit']); 
    Route::POST('/property/update/{id}', [propertyController::class, 'update']);
    Route::get('/property/delete/{id}', [propertyController::class, 'delete']);

    //Show Bank Name on add property
    Route::get('/property/index', [bankController::class, 'showBankName']);

    //view total property bank subscription consultant on dashboard
    Route::get('/dashboard', [propertyController::class, 'viewOnDashboard']);

    //excel import property
    Route::POST('/property/import',[propertyController::class, 'propertyImport']);

    //request inquiry list
    Route::get('/request-inquiry/view', [requestInquiryController::class, 'view']);
    Route::get('/request-inquiry/view-in-details/{id}', [requestInquiryController::class, 'viewInDetails']);
    Route::get('/request-inquiry/delete/{id}', [requestInquiryController::class, 'delete']);
});

//user authentication
Route::POST('/customerRegister', [userAuthentication::class, 'customerRegister']);
Route::POST('/customerLogin', [userAuthentication::class, 'customerLogin']);

//only User accessible routes middleware
Route::group(['middleware' => 'isUser'], function() {
    Route::get('account/security', function(){
        return view('web/account/security');
    });

    Route::get('/user/logout',[userAuthentication::class, 'userLogout']);
    Route::get('/account/profile',[userAuthentication::class, 'userProfile']);
    Route::POST('/userProfileUpdate/{id}',[userAuthentication::class, 'userProfileUpdate']);
    Route::POST('/userChangePassword/{id}', [userAuthentication::class, 'userChangePassword']);
    
    //payment routes
    Route::POST('/subscriptions-plans/buy',[paymentController::class, 'payment']);
    Route::get('payment_response',[paymentController::class, 'paymentResponse']);

    //users account route
    Route ::get('/account/my-subscriptions',[subscriptionController::class, 'viewPurchasedSubscription']);
    Route ::get('/purchased-subscription/delete/{id}',[subscriptionController::class, 'deletePurchasedSubscription']);
    Route ::get('/account/viewed-property',[propertyController::class, 'viewedProperty']);
});

//homepage view property
Route::get('/', [propertyController::class, 'viewProperty']);
Route::get('/listing/index', [propertyController::class, 'viewForListing']);
Route::get('/listing-details/{id}', [propertyController::class, 'listingDetails']);

//state wise property view
Route::get('/listing/{state}', [propertyController::class, 'stateWiseProperty']);

//property search
Route::get('/search-property/index/', [propertyController::class, 'searchProperty']);

//show privacy policy on homepage
Route::get('/privacy-policy/index', [settingController::class, 'viewPrivacyPolicy']);
Route::get('/terms-conditions/index', [settingController::class, 'viewTermsConditions']);

//joinUs route
Route::POST('/joinUs', [joinUsController::class, 'index']);

//subscription view on homepage
Route::get('/subscriptions/index', [subscriptionController::class, 'viewOnSubscriptionPage']);

//contact us
Route::POST('/contactUs', [contactUsController::class, 'index']);

//request inquiry
Route::POST('/requestInquiry', [requestInquiryController::class, 'index']);

//subscribe email 
Route::POST('/subscribeEmail', [subscriberController::class, 'index']);

//forget password
Route::get('forget-password', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
