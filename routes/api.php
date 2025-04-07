<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\ApiAuthController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\api\propertyController;
use App\Http\Controllers\api\bankController;
use App\Http\Controllers\api\subscriptionsController;
use App\Http\Controllers\api\requestInquiryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::apiResource('/user_authentication','App\Http\Controllers\auth\user_authentication');

Route::group(['middleware' => ['cors', 'json.response']], function (){

    //public routes
    Route::post('register',[ApiAuthController::class,'register']);
    Route::post('login',[ApiAuthController::class,'login']);
    Route::post('logout',[ApiAuthController::class,'logout']);


});

Route::middleware('auth:api')->group(function () {

    // our routes to be protected will go in here
    //AUTH ROUTES
    Route::post('verify_otp',[ApiAuthController::class,'verifyOtp']);
    Route::post('profile_update',[ApiAuthController::class,'profileUpdate']);
    Route::post('password_change',[ApiAuthController::class,'passwordChange']);
    Route::get('my-subscription',[subscriptionsController::class,'mySubscription']);
    Route::get('viewed-property',[propertyController::class,'viewedProperty']);

    Route::get('/',[propertyController::class,'home']);
    Route::get('search-property',[propertyController::class,'searchProperty']);
    Route::get('state-wise-property/{state}',[propertyController::class,'stateWiseProperty']);

    Route::get('property-details/{id}',[propertyController::class,'propertyDetails']);
    Route::post('request_inquiry',[requestInquiryController::class,'requestInquiry']);
  
    Route::get('subscriptions',[subscriptionsController::class,'subscriptions']);
});






