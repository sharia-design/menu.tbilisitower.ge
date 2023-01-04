<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrinkCategory;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Image;


class DrinkCategoryController extends Controller
{
    public function index()
    {
        $categories = DrinkCategory::orderBy('place', 'desc')->get();
        return view('admin.drink-categories.index', ['categories' => $categories]);
    }

    public function create()
    {

        return view('admin.drink-categories.create');
    }

    public function store(Request $request)
    {

        $attributes = $request->validate([
            'name_ka' => 'required|min:2',
            'name_ru' => 'required|min:2',
            'name_en' => 'required|min:2',
            'image' => 'required|image',
            'place' => ['required', Rule::unique('drink_categories', 'place')],
        ]);

        $attributes['slug'] = Str::slug($request->name_ka);

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/cats/' . $filename);

        Image::make($image->getRealPath())->resize(null, 150, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path);

        $attributes['image'] = $filename;

        DrinkCategory::create($attributes);

        return redirect('admin/drink-categories')->with('success', 'კატეგორია დამატებულია');
    }

    public function edit(DrinkCategory $category)
    {
        return view('admin.drink-categories.edit', compact('category'));
    }

    public function update(DrinkCategory $category, Request $request)
    {

        $attributes = $request->validate([
            'name_ka' => 'required|min:2',
            'name_ru' => 'required|min:2',
            'name_en' => 'required|min:2',
            'image' => 'image',
            'place' => ['required', Rule::unique('drink_categories', 'place')],
        ]);

        $attributes['slug'] = Str::slug($request->name_ka);

        if ($attributes['image'] ?? false) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/cats/' . $filename);

            Image::make($image->getRealPath())->resize(null, 150, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path);

            $attributes['image'] = $filename;
        }

        $category->update($attributes);

        return redirect('admin/drink-categories')->with('success', 'კატეგორია განახლდა!');
    }



    public function destroy(DrinkCategory $category)
    {
        $category->delete();

        return back()->with('success', 'კატეგორია წაიშალა!');
    }
}
