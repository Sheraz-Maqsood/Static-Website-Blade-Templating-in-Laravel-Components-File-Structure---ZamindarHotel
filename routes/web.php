<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});



Route::get('/{view}', function ($view) {
    // Clean the view parameter to remove any potential multiple forward slashes at the beginning or end.
    $view = trim($view, '/');

    // Replace any remaining forward slashes with dots to make it a valid view name.
    $view = str_replace('/', '.', $view);

    if (View::exists($view)) {
        return view($view);
    } else {
        return redirect('coming-soon');
    }
})->where('view', '.*');
