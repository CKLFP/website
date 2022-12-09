<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Verify;
use App\Http\Livewire\Guest\Cv;

/*
|--------------------------------------------------------------------------
| Web Routes para cklfp
|--------------------------------------------------------------------------
*/

// Redirect home with default language (pt - in my case) mydomain.dev/pt/
Route::get('/', function ()
{
    return redirect(app()->getLocale().'/welcome');
});

Route::group(
    [
        'prefix' => '{language}',
        'where' => ['language' => '[a-zA-Z]{2}']
    ],
    function ()
    {
        Route::view('/welcome', 'welcome')->name('welcome');

        Route::middleware('guest')->group(function ()
        {
            Route::get('cv', Cv::class)
                ->name('cv');

            Route::get('login', Login::class)
                ->name('login');

            Route::get('register', Register::class)
                ->name('register');
        });

        Route::get('password/reset', Email::class)
        ->name('password.request');

        Route::get('password/reset/{token}', Reset::class)
        ->name('password.reset');

        Route::middleware('auth')->group(function () {

            Route::get('email/verify', Verify::class)
                ->middleware('throttle:6,1')
                ->name('verification.notice');

            Route::get('password/confirm', Confirm::class)
                ->name('password.confirm');

            Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
                ->middleware('signed')
                ->name('verification.verify');

            Route::post('logout', LogoutController::class)
                ->name('logout');
        });
    }
);