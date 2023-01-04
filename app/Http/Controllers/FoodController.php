<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\FoodCategory;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Image;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::with('categories')->orderBy('created_at', 'desc')->get();
        return view('admin.food.index', ['foods' => $foods]);
    }

    public function create()
    {

        $categories = FoodCategory::all();
        return view('admin.food.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name_ka' => 'required|min:2',
            'name_ru' => 'required|min:2',
            'name_en' => 'required|min:2',
            'desc_ka' => 'min:2',
            'desc_ru' => 'min:2',
            'desc_en' => 'min:2',
            'image' => 'required|image',
            'price' => 'required',
        ]);

        $attributes['slug'] = Str::slug($request->name_ka);

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('uploads/food/' . $filename);
        Image::make($image->getRealPath())->resize(null, 640, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path);
        $attributes['image'] = $filename;


        $cats = array_map('intval', $request->cat_ids);

        $food = Food::create($attributes);

        $food->categories()->attach($cats);


        return redirect('admin/foods')->with('success', 'კერძი დამატებულია');
    }

    public function edit(Food $food)
    {
        $categories = FoodCategory::all();
        $cats = array_map(function ($s) {
            return $s['id'];
        }, $food->categories->toArray());


        return view('admin.food.edit', [
            'food' => $food,
            'categories' => $categories,
            'cats' => $cats,
        ]);
    }

    public function update(Food $food, Request $request)
    {

        $attributes = $request->validate([
            'name_ka' => 'required|min:2',
            'name_ru' => 'required|min:2',
            'name_en' => 'required|min:2',
            'desc_ka' => 'nullable',
            'desc_ru' => 'nullable',
            'desc_en' => 'nullable',
            'image' => 'image',
            'price' => 'required',
        ]);

        $attributes['slug'] = Str::slug($request->name_ka);

        if($attributes['image'] ?? false) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/food/' . $filename);
            Image::make($image->getRealPath())->resize(null, 640, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path);
            $attributes['image'] = $filename;
        }


        $cats = array_map('intval', $request->cat_ids);

        
        $food->categories()->detach();
        $food->categories()->attach($cats);

        $food->update($attributes);
        
        return redirect('admin/foods')->with('success', 'კერძი განახლდა!');
    }

    public function destroy(Food $food)
    {
        $food->delete();

        return back()->with('success', 'კერძი წაიშალა!');
    }
}
