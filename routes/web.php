<?php

use Illuminate\Http\Request;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\jelajahiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostinganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/about", function () {
    return view("About");
});

Route::get("/index", [HomeController::class, "home"]);
Route::get("/", function () {
    return redirect("/index");
});

// Route::resource('/store', [DashboardController::class, 'index']);

Route::get("/index/login", [LoginController::class, "login"])
    ->name("login")
    ->middleware("guest");
Route::post("/login/store", [LoginController::class, "authenticate"]);
Route::post("/logout", [LoginController::class, "logout"]);

Route::get("index/register", [RegisterController::class, "index"])->middleware(
    "guest"
);
Route::get("index/testing", [RegisterController::class, "index"]);
Route::post("/register/store", [RegisterController::class, "store"]);

Route::get("/dashboard", function () {
    return view("dashboard.index");
});

Route::get("jelajahi", [JelajahiController::class, "index"])->middleware("auth") ->name('jelajahi');

Route::get("/jelajahi/alam", [PostController::class, "alam"]);
Route::get("/jelajahi/budaya", [PostController::class, "budaya"]);
Route::get("/jelajahi/kuliner", [PostController::class, "kuliner"]);

Route::get("/jelajahi/{post}", [PostController::class, "show"]);

Route::get("/about", function () {
    return view("About");
});





















Route::get("postingan", [PostinganController::class, "index"])->name('postingan');
Route::get("postingan/create", [PostinganController::class, "create"])->name('create');
Route::post("postingan", [PostinganController::class, "store"]);
Route::get("postingan/{title}", [PostinganController::class, "edit"]);
Route::post("postingan/{title}", [PostinganController::class, "update"]);
Route::post("postingan/{title}/delete", [PostinganController::class, "delete"]);

// Route::resource('/dashboard/posts', DashboardPostController::class) -> middleware('auth');

// Route::get('/sesi', [SessionsController::class, 'insert']);
// Route::post('/sesi'/'insert', [SessionsController::class, 'login']);

// Route::get('/cate', function () {
//     return view('Cate', [
//         "title" => "posts",
//         "posts" => $kategori
//     ]);
// });
