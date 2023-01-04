<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use App\Models\DrinkCategory;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image as Image;

class DrinkController extends Controller
{
    public function index()
    {
        $drinks = Drink::with('categories')->orderBy('created_at', 'desc')->get();
        return view('admin.drink.index', ['drinks' => $drinks]);
    }

    public function create()
    {

        $categories = DrinkCategory::all();
        return view('admin.drink.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name_ka' => 'required|min:2',
            'name_ru' => 'required|min:2',
            'name_en' => 'required|min:2',
            'desc_ka' => 'nullable',
            'desc_ru' => 'nullable',
            'desc_en' => 'nullable',
            'image' => 'image',
            'alco' => 'nullable',
            'place' => ['required', Rule::unique('drinks', 'place')],
        ]);

        $attributes['slug'] = Str::slug($request->name_ka);

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('uploads/drink/' . $filename);
        Image::make($image->getRealPath())->resize(null, 640, function ($constraint) {
            $constraint->aspectRatio();
        })->save($path);
        $attributes['image'] = $filename;


        $cats = array_map('intval', $request->cat_ids);

        $drink = Drink::create($attributes);

        $drink->categories()->attach($cats);


        return redirect('admin/drinks')->with('success', 'სასმელი დამატებულია');
    }

    public function edit(Drink $drink)
    {
        $categories = DrinkCategory::all();
        $cats = array_map(function ($s) {
            return $s['id'];
        }, $drink->categories->toArray());


        return view('admin.drink.edit', [
            'drink' => $drink,
            'categories' => $categories,
            'cats' => $cats,
        ]);
    }

    public function update(Drink $drink, Request $request)
    {

        $attributes = $request->validate([
            'name_ka' => 'required|min:2',
            'name_ru' => 'required|min:2',
            'name_en' => 'required|min:2',
            'desc_ka' => 'nullable',
            'desc_ru' => 'nullable',
            'desc_en' => 'nullable',
            'image' => 'image',
            'alco' => 'nullable',
            'place' => 'nullable',
        ]);

        $attributes['slug'] = Str::slug($request->name_ka);

        if($attributes['image'] ?? false) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('uploads/drink/' . $filename);
            Image::make($image->getRealPath())->resize(null, 640, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path);
            $attributes['image'] = $filename;
        }


        $cats = array_map('intval', $request->cat_ids);

        
        $drink->categories()->detach();
        $drink->categories()->attach($cats);

        $drink->update($attributes);
        
        return redirect('admin/drinks')->with('success', 'სასმელი განახლდა!');
    }

    public function destroy(Drink $drink)
    {
        $drink->delete();

        return back()->with('success', 'სასმელი წაიშალა!');
    }
}
