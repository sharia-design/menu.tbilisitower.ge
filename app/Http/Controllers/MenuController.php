<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Drink;
use App\Models\DrinkCategory;
use App\Models\FoodCategory;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class MenuController extends Controller
{

    public function index()
    {
        $food_categories = FoodCategory::with('foods')->orderBy('updated_at', 'desc')->get();
        $drink_categories = DrinkCategory::with('drinks')->orderBy('updated_at', 'desc')->get();
        $foods = Food::with('categories')->orderBy('updated_at', 'desc')->get();
        return view('menu.index', [
            'food_categories' => $food_categories,
            'drink_categories' => $drink_categories,
            'foods' => $foods,
        ]);
    }

    public function search(Request $request)
    {
        
        $q = $request->search;
        $result['foods'] = Food::where('slug', 'like', '%' . $request->search . '%')
        ->orwhere('name_ka', 'like', '%' . $request->search . '%')
        ->orwhere('desc_ka', 'like', '%' . $request->search . '%')
        ->orwhere('name_ru', 'like', '%' . $request->search . '%')
        ->orwhere('desc_ru', 'like', '%' . $request->search . '%')
        ->orwhere('name_en', 'like', '%' . $request->search . '%')
        ->orwhere('desc_en', 'like', '%' . $request->search . '%')
        ->get();

        $result['drinks'] = Drink::where('slug', 'like', '%' . $request->search . '%')
        ->orwhere('name_ka', 'like', '%' . $request->search . '%')
        ->orwhere('desc_ka', 'like', '%' . $request->search . '%')
        ->orwhere('name_ru', 'like', '%' . $request->search . '%')
        ->orwhere('desc_ru', 'like', '%' . $request->search . '%')
        ->orwhere('name_en', 'like', '%' . $request->search . '%')
        ->orwhere('desc_en', 'like', '%' . $request->search . '%')
        ->get();

        $total = count($result['foods']) + count($result['drinks']);

        return view('menu.search', [
            'items' => $result,
            'q' => $q,
            'total' => $total,
        ]);
    }

    public function foods()
    {
        $food_categories = FoodCategory::with('foods')->orderBy('updated_at', 'desc')->get();
        $foods = Food::with('categories')->orderBy('updated_at', 'desc')->get();
        return view('menu.foods', [
            'food_categories' => $food_categories,
            'foods' => $foods,
        ]);
    }

    public function drinks()
    {
        // $drink_categories = DrinkCategory::with('drinks')->orderBy('updated_at', 'desc')->get();
        $categories = DrinkCategory::orderBy('place', 'desc')->get();

        $drinks = Drink::with('categories')->orderBy('updated_at', 'desc')->get();
        return view('menu.drinks', [
            'drink_categories' => $categories,
            'drinks' => $drinks,
        ]);
    }

    public function drinkCat(Request $request)
    {
        $category = DrinkCategory::where('slug', $request->slug)->first();

        $food_categories = FoodCategory::with('foods')->orderBy('updated_at', 'desc')->get();
        $drink_categories = DrinkCategory::with('drinks')->orderBy('updated_at', 'desc')->get();

        
        $items = $category->load('Drinks')->drinks;
        
        return view('menu.single-drink', [
            'food_categories' => $food_categories,
            'drink_categories' => $drink_categories,
            'cat' => $category,
            'items' => $items,
        ]);
    }

    public function foodCat(Request $request)
    {
        $category = FoodCategory::where('slug', $request->slug)->first();

        $food_categories = FoodCategory::with('foods')->orderBy('updated_at', 'desc')->get();
        $drink_categories = DrinkCategory::with('drinks')->orderBy('updated_at', 'desc')->get();

        
        $items = $category->load('Foods')->foods;

        return view('menu.single-food', [
            'food_categories' => $food_categories,
            'drink_categories' => $drink_categories,
            'cat' => $category,
            'items' => $items,
        ]);
    }

        // ------------ Get Review :: Ajax  -----------

        public function getFoodDetail($id)
        {
            $food = Food::find($id);
            return $food;
        }

        public function getDrinkDetail($id)
        {
            $drink = Drink::find($id);
            return $drink;
        }


    
}
