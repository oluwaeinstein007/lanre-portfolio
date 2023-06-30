<?php
// if (!(App::environment('local'))) {
//     URL::forceScheme('https');
// }

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotifyEmailController;
use Psy\TabCompletion\Matcher\FunctionsMatcher;
use Illuminate\Support\Facades\Mail;
use App\Mail\Configuration;
use App\Mail\SendEmail;

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
    // return view('welcome');
    return view('landing');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/locator', function () {
    return view('locator');
});

Route::post('/', [NotifyEmailController::class, 'store']);

//create route for landing page
// Route::get('/', 'LandingController@index');
