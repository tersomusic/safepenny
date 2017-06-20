<?php

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

Route::get('/', 'IndexController@main');

Route::get('/how', 'howtoController@main');
Route::get('/verifyemail', 'verifyemailController@main');

Route::get('/dashboard', 'DashboardController@main');
Route::get('/login', 'LoginController@main');

Route::get('/signup', 'SignupController@index');

Route::get('/dashboard/account', 'accountController@main');

Route::get('/Accountd', 'AccountdController@main');

Route::get('/faqandsecurity' , 'faqandsecurityController@main');

Route::get('/about', 'aboutController@main');

Route::get('/privacy', 'privacyController@main');

Route::get('/Terms', 'TermsController@main');

Route::get('/dashboard/sendpay', 'sendpayController@main');

Route::get('forget', 'ForgetController@main');

Route::get('/dashboard/Receivepay', 'ReceivepayController@main');

Route::get('/dashboard/Referral', 'ReferralController@main');

Route::get('/home', 'HomeController@index');

Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);

?>