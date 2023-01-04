<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodCategory;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Image;


class FoodCategoryController extends Controller
{
    public function index()
    {
        $categories = FoodCategory::orderBy('place', 'desc')->get();
        return view('admin.food-categories.index', ['categories' => $categories]);
    }

    public function create()
    {

        return view('admin.food-categories.create');
    }

    public function store(Request $request)
    {

        $attributes = $request->validate([
            'name_ka' => 'required|min:2',
            'name_ru' => 'required|min:2',
            'name_en' => 'required|min:2',
            'image' => 'required|image',
            'place' => ['required', Rule::unique('food_categories', 'place')],
        ]);

        $attributes['slug'] = Str::slug($request->name_ka);

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/cats/' . $filename);

        Image::make($image->getRealPath())->resize(null, 250, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path);

        $attributes['image'] = $filename;

        FoodCategory::create($attributes);

        return redirect('admin/food-categories')->with('success', 'კატეგორია დამატებულია');
    }

    public function edit(FoodCategory $category)
    {
        return view('admin.food-categories.edit', compact('category'));
    }

    public function update(FoodCategory $category, Request $request)
    {

        $attributes = $request->validate([
            'name_ka' => 'required|min:2',
            'name_ru' => 'required|min:2',
            'name_en' => 'required|min:2',
            'image' => 'image',
            'price' => 'required',
            'place' => ['required', Rule::unique('food_categories', 'place')],
        ]);

        $attributes['slug'] = Str::slug($request->name_ka);

        if ($attributes['image'] ?? false) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/cats/' . $filename);

            Image::make($image->getRealPath())->resize(null, 250, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path);

            $attributes['image'] = $filename;
        }

        $category->update($attributes);

        return redirect('admin/food-categories')->with('success', 'კატეგორია განახლდა!');
    }



    public function destroy(FoodCategory $category)
    {
        $category->delete();

        return back()->with('success', 'კატეგორია წაიშალა!');
    }
}
