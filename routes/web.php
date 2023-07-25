<?php

use Illuminate\Http\Request;
use App\Http\Middleware\user;
use App\Http\Middleware\admin;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\PostController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\jelajahiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostinganController;


// Route::get("/", function () {
//     return view("/layout/home", [
//         'title' => 'Home'
//     ]);
// })->name('home');

Route::get("/destination", function () {
    return view("/layout/destination", [
        'title' => 'Destination'
    ]);
})->name('category');


// FORM AUTH //
// Route::get("/login", [LoginController::class, "login"])
//     ->name("login")
//     ->middleware("guest");

// Route::post("/login/store", [LoginController::class, "authenticate"]);


// Route::get("/register", [RegisterController::class, "index"]);


Route::get("index/testing", [RegisterController::class, "index"]);



// ==== GUEST ===== //

Route::middleware(['guest'])->group(function() {
    Route::get('/', function() {
        return view('/layout/home', [
            'title' => 'Home',
        ]);
    });
    // Route::get("/", [HomeController::class, "home"]);
    Route::get('/login', [LoginController::class, 'login']);
    Route::post("/login/store", [LoginController::class, "authenticate"]);
    Route::get("/register", [RegisterController::class, "index"]);
    Route::post("/register/store", [RegisterController::class, "store"]);
});

// ==== USER ===== //

// Route::get("/home", [HomeController::class, 'home']);


Route::middleware(['user'])->group(function() {
    // Route::get("/home", [HomeController::class, 'home']);

    Route::get('/home', function() {
        return view('user.home', [
            'title' => 'Home',
        ]);
    });

    Route::get("/dashboard",[DashboardController::class, 'index']);
    });

// ==== ADMIN ====//

Route::middleware(['admin'])->group(function() {
    Route::get('/home', function() {
        return view('admin.home', [
            'title' => 'Home',
        ]);
    });
    Route::get("/dashboard",[DashboardController::class, 'index']);
    });





// Route::get("/dashboard/admin/post", function () {
//     return view("admin/post");
// });

// Route::get("/dashboard/admin/review", function () {
//     return view("admin/review");
// });



// ======= DESTINASI ======= //

Route::get("/alam", function () {
    return view("/category/alam", [
        'title' => 'Kateogori Alam'
    ]);
})->name('Alam');

Route::get("/budaya", function () {
    return view("/category/budaya", [
        'title' => 'Kateogori Alam'
    ]);
})->name('Alam');

Route::get("/kuliner", function () {
    return view("/category/kuliner", [
        'title' => 'Kateogori Alam'
    ]);
})->name('Alam');


Route::get("jelajahi", [JelajahiController::class, "index"])->middleware("auth") ->name('jelajahi');

Route::get("/jelajahi/alam", [PostController::class, "alam"]);
Route::get("/jelajahi/budaya", [PostController::class, "budaya"]);
Route::get("/jelajahi/kuliner", [PostController::class, "kuliner"]);

Route::get("/jelajahi/{post}", [PostController::class, "show"]);

Route::get("/about", function () {
    return view("About");
});

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


Route::get("/logout", [LoginController::class, "logout"]);
