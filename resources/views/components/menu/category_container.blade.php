@php
$change_lang = '/';
$lang_uri = request()->segments();
$remove_lang = array_shift($lang_uri);
$change_lang = implode('/', $lang_uri);
@endphp

<div class="category-container">
    @if (Route::is('front.menu.foods') || Route::is('front.index') || Route::is('front.menu.food.cat'))
    {{-- Slider: Foods --}}
    <nav class="cat-list trans cat-food {{ Route::is('front.menu.drinks') ? 'none' : '' }}">
        @foreach ($food_categories as $foodCategory)
        <a href="{{ route('front.menu.food.cat', ['lang' => App::currentLocale(), 'slug' => $foodCategory->slug]) }}" class="cat-item trans fx-active {{ (str_contains($change_lang, $foodCategory->slug) ? 'active' : '') }}">
            <div class="cat-item--img">
                <img src="{{ asset('public/uploads/cats/' . $foodCategory->image) }}" alt="{{ $foodCategory['name_' . App::getLocale('lang')] }}" width="80" height="80">
            </div>
            <h3 class="cat-item--name">
                {{ $foodCategory['name_' . App::getLocale('lang')] }}
            </h3>
        </a>
        @endforeach
    </nav>
    {{-- Slider: Foods --}}
    @else
    {{-- Slider: Drinks --}}
    <nav class="cat-list trans cat-drink">
        @foreach ($drink_categories as $drinkCategory)
        <a href="{{ route('front.menu.drink.cat', ['lang' => App::currentLocale(), 'slug' => $drinkCategory->slug]) }}" class="cat-item trans fx-active {{ (str_contains($change_lang, $drinkCategory->slug) ? 'active' : '') }}">
            <div class="cat-item--img">
                <img src="{{ asset('public/uploads/cats/' . $drinkCategory->image) }}" alt="{{ $drinkCategory['name_' . App::getLocale('lang')] }}" width="80" height="80">
            </div>
            <h3 class="cat-item--name">
                {{ $drinkCategory['name_' . App::getLocale('lang')] }}
            </h3>
        </a>
        @endforeach
    </nav>
    {{-- Slider: Drinks --}}
    @endif



</div>
