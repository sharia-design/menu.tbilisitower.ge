<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\FoodCategoryController;
use App\Http\Controllers\DrinkCategoryController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MenuController;
use App\Models\Drink;
use App\Models\DrinkCategory;
use App\Models\Food;
use App\Models\FoodCategory;

// ========= Auth \ Session \ ================================
Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('admin/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('sessions', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// ========= Auth \ Session \ ================================


// ========= Back \ Admin ================================
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', function () {

        $foods = Food::take(5)->orderBy('updated_at', 'desc')->get();
        $drinks = Drink::take(5)->orderBy('updated_at', 'desc')->get();
        $latests = $foods->concat($drinks)->take(10);

        $foodsCount = count(Food::all());
        $drinksCount = count(Drink::all());
        $drinkCatsCount = count(DrinkCategory::all());
        $foodCatsCount = count(FoodCategory::all());

        return view('admin.dashboard', [
            'latests' => $latests,
            'foodsCount' => $foodsCount,
            'drinksCount' => $drinksCount,
            'drinkCatsCount' => $drinkCatsCount,
            'foodCatsCount' => $foodCatsCount,
        ]);
    });

    // ------ Food Categories -------------
    Route::prefix('food-categories')->name('food-cat.')->group(function () {
        Route::get('/', [FoodCategoryController::class, 'index'])->name('index');
        Route::get('/create', [FoodCategoryController::class, 'create'])->name('create');
        Route::post('/create', [FoodCategoryController::class, 'store']);
        Route::get('/{category}/edit', [FoodCategoryController::class, 'edit'])->name('edit');
        Route::patch('/{category}/edit', [FoodCategoryController::class, 'update'])->name('update');
        Route::delete('/{category}', [FoodCategoryController::class, 'destroy'])->name('delete');
    });

    // ------ Drink Categories -------------
    Route::prefix('drink-categories')->name('drink-cat.')->group(function () {
        Route::get('/', [DrinkCategoryController::class, 'index'])->name('index');
        Route::get('/create', [DrinkCategoryController::class, 'create'])->name('create');
        Route::post('/create', [DrinkCategoryController::class, 'store']);
        Route::get('/{category}/edit', [DrinkCategoryController::class, 'edit'])->name('edit');
        Route::patch('/{category}/edit', [DrinkCategoryController::class, 'update'])->name('update');
        Route::delete('/{category}', [DrinkCategoryController::class, 'destroy'])->name('delete');
    });

    // ------ Foods -------------
    Route::prefix('foods')->name('food.')->group(function () {
        Route::get('/', [FoodController::class, 'index'])->name('index');
        Route::get('/create', [FoodController::class, 'create'])->name('create');
        Route::post('/create', [FoodController::class, 'store']);
        Route::get('/{food}/edit', [FoodController::class, 'edit'])->name('edit');
        Route::patch('/{food}/edit', [FoodController::class, 'update'])->name('update');
        Route::delete('/{food}', [FoodController::class, 'destroy'])->name('delete');
    });

    // ------ Drinks -------------
    Route::prefix('drinks')->name('drink.')->group(function () {
        Route::get('/', [DrinkController::class, 'index'])->name('index');
        Route::get('/create', [DrinkController::class, 'create'])->name('create');
        Route::post('/create', [DrinkController::class, 'store']);
        Route::get('/{drink}/edit', [DrinkController::class, 'edit'])->name('edit');
        Route::patch('/{drink}/edit', [DrinkController::class, 'update'])->name('update');
        Route::delete('/{drink}', [DrinkController::class, 'destroy'])->name('delete');
    });
});


// ========= Back \ Admin ================================


// ========= Front ================================
// ---- Root redirect to::--> Language --------
Route::get('/', function () {
    $lang = session('locale') ?: config('app.fallback_locale');
    session(['locale' => $lang]);
    App::setLocale($lang);
    return redirect('/' . $lang, 301);
});

// Food Details
Route::post('/api/food/detail/{id}', [MenuController::class, 'getFoodDetail'])->name('food.detail');
Route::post('/api/drink/detail/{id}', [MenuController::class, 'getDrinkDetail'])->name('drink.detail');



// ---- Pages: (:in-language) --------
Route::prefix('/{lang?}')->middleware('locale')->name('front.')->group(function () {
    Route::get('/search/{search?}', [MenuController::class, 'search'])->name('search');

    // --- Menu ----- : menu.tbilisitower.ge/ka
    Route::get('/', [MenuController::class, 'index'])->name('index');
    Route::get('/foods', [MenuController::class, 'foods'])->name('menu.foods');
    Route::get('/drinks', [MenuController::class, 'drinks'])->name('menu.drinks');
    Route::get('/drink/{slug?}', [MenuController::class, 'drinkCat'])->name('menu.drink.cat');
    Route::get('/food/{slug?}', [MenuController::class, 'foodCat'])->name('menu.food.cat');
});

// ========= Front ================================
