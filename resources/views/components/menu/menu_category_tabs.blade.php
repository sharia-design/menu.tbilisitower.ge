        <div class="category-tabs--container">

            <ul class="category-tabs">
                <li class="cat-tab trans {{ Route::is('front.menu.foods') || Route::is('front.menu.food.cat') || Route::is('front.index') ? 'active' : '' }} " data-cat="food">
                    <a href="{{ route('front.menu.foods', ['lang' => App::currentLocale()]) }}">
                        <span class="cat--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
                                <path fill="#6A888D" d="M7 2a1 1 0 0 1 1 1v6a3 3 0 0 0 2 2.83V3a1 1 0 0 1 2 0v8.83A3 3 0 0 0 14 9V3a1 1 0 0 1 2 0v6a5 5 0 0 1-4 4.9V29a1 1 0 0 1-2 0V13.9A5 5 0 0 1 6 9V3a1 1 0 0 1 1-1Zm13.958 2.958c.318-.32.676-.566 1.042-.728V14h-2V7c0-.674.348-1.434.958-2.042ZM22 16v13a1 1 0 0 0 2 0V3a1 1 0 0 0-1-1c-1.326 0-2.566.652-3.458 1.542C18.652 4.434 18 5.674 18 7v8a1 1 0 0 0 1 1h3Z" />
                            </svg>
                        </span>
                        <h2 class="cat--txt">{{ __('front.venue') }}</h2>
                    </a>
                </li>
                <li class="cat-tab trans {{ Route::is('front.menu.drinks') || Route::is('front.menu.drink.cat') ? 'active' : '' }}" data-cat="drink">
                    <a href="{{ route('front.menu.drinks', ['lang' => App::currentLocale()]) }}">
                        <span class="cat--icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
                                <path fill="#5E625D" d="M24 2a6 6 0 1 1-2.186 11.59L15 22.668V28h3a1 1 0 0 1 0 2h-8a1 1 0 0 1 0-2h3v-5.332L2.4 8.548a2 2 0 0 1-.4-1.2v-.334a1 1 0 0 1 1-1h2.244l-2.048-2.62a1 1 0 0 1 1.576-1.232L7.78 6.014h10.554A6.002 6.002 0 0 1 24 2Zm-3.472 4.014H25a1 1 0 0 1 1 1v.332a2 2 0 0 1-.4 1.2l-2.514 3.35a4 4 0 1 0-2.56-5.88v-.002h.002Zm-11.184 2 4.046 5.18a1 1 0 0 1-1.576 1.23l-5.008-6.41H4.5L14 20.668l9.5-12.654H9.344Z" />
                            </svg>
                        </span>
                        <h2 class="cat--txt">{{ __('front.drinks') }}</h2>
                    </a>
                </li>
            </ul>
        </div>
