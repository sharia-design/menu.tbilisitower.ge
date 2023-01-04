    @php
    $change_lang = '/';
    $lang_uri = request()->segments();
    $remove_lang = array_shift($lang_uri);
    $change_lang = implode('/', $lang_uri);
    @endphp

    <div class="off-menu trans hide">
        {{-- Header --}}
        <div class="off-menu-header">
            <a href="{{ route('front.index', ['lang' => App::currentLocale()]) }}" class="off-menu-logo fx-active trans">
                <img src="{{ asset('public/img/logo-menu-bw.svg') }}" alt="Tbilisi Tower Menu" height="56">
            </a>
            <button class="off-menu-close trans">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32" class="trans">
                    <path fill="#2D2829" d="m8.533 25.333-1.866-1.866L14.133 16 6.667 8.533l1.866-1.866L16 14.133l7.467-7.466 1.866 1.866L17.867 16l7.466 7.467-1.866 1.866L16 17.867l-7.467 7.466Z" />
                </svg>
            </button>
        </div>
        {{-- Header --}}
        {{-- Navigation --}}
        <nav class="off-menu-nav">
            <a href="{{ route('front.menu.foods', ['lang' => App::currentLocale()]) }}" class="fx-active trans {{ Route::is('front.menu.foods') ? 'active' : '' }}">{{ __('front.venue') }}</a>
            <a href="{{ route('front.menu.drinks', ['lang' => App::currentLocale()]) }}" class="fx-active trans {{ Route::is('front.menu.drinks') ? 'active' : '' }}">{{ __('front.drinks') }}</a>
        </nav>
        {{-- Navigation --}}

        {{-- Lang Switcher --}}
        <ul class="off-menu-lang">
            {{-- KA --}}
            <li>
                <a href="/ka/{{ $change_lang }}" class="trans {{ (App::getLocale('lang') == 'ka') ? 'active' : '' }}">
                    <img src="{{ asset('public/img/flag-ka.svg') }}" class="off-menu-flag" alt="Flag of Georgia" height="16">
                    <span class="off-menu-lang--name">ქართული</span>
                </a>
            </li>
            {{-- KA --}}
            {{-- RU --}}
            <li>
                <a href="/ru/{{ $change_lang }}" class="trans {{ (App::getLocale('lang') == 'ru') ? 'active' : '' }}">
                    <img src="{{ asset('public/img/flag-ru.svg') }}" class="off-menu-flag" alt="Flag of Russia" height="16">
                    <span class="off-menu-lang--name">Русский</span>
                </a>
            </li>
            {{-- RU --}}
            {{-- EN --}}
            <li>
                <a href="/en/{{ $change_lang }}" class="trans {{ (App::getLocale('lang') == 'en') ? 'active' : '' }}">
                    <img src="{{ asset('public/img/flag-en.svg') }}" class="off-menu-flag" alt="Flag of United Kingdom" height="16">
                    <span class="off-menu-lang--name">English</span>
                </a>
            </li>
            {{-- EN --}}
        </ul>
        {{-- Lang Switcher --}}        

        {{-- Search --}}
        <form action="/{{ App::getLocale('lang') }}/search/" method="GET" class="off-menu-search__form">
            <input type="search trans" class="off-menu-search trans" name="search" placeholder="{{ __('front.search_any') }}" value="{{ Route::is('front.search') ? $q : '' }}">
            <button class="off-menu-search--btn trans" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" class="trans">
                    <path fill="#5E625D" d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5Zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14Z" />
                </svg>
            </button>
        </form>
        
        {{-- Search --}}

        {{-- Footer --}}
        <div class="off-menu-footer">
            <div class="off-menu-ft--row">
                <div class="off-ft-block">
                    <h5>{{ __('front.contact') }}:</h5>
                    <p>{{ __('front.tel') }}: <a href="tel:123" class="trans">+(995) 599 81 88 88</a></p>
                    <p>{{ __('front.mail') }}: <a href="mailto:info@tbilisitower.ge" class="trans">info@tbilisitower.ge</a></p>
                </div>
                <div class="off-ft-block">
                    <h5>{{ __('front.address-key') }}:</h5>
                    <p>{{ __('front.address-val') }}</p>
                </div>
            </div>
            <div class="off-menu-ft--row">
                <a href="{{ route('front.index', ['lang' => App::currentLocale()]) }}" class="ft-logo trans">
                    <img src="{{ asset('public/img/logo-footer.png') }}" alt="Tbilisi Tower Logo" height="32">
                    <span>{{ __('tbilisi-tower') }}</span>
                </a>
                <nav class="social-links">
                    <a href="#" class="fx-active trans" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none" viewBox="0 0 24 25">
                            <path fill="#5E625D" d="M22 12.5c0-5.52-4.48-10-10-10S2 6.98 2 12.5c0 4.84 3.44 8.87 8 9.8v-6.8H8v-3h2V10c0-1.93 1.57-3.5 3.5-3.5H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95Z" />
                        </svg>
                    </a>
                    <a href="#" class="fx-active trans" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none" viewBox="0 0 24 25">
                            <path fill="#5E625D" d="M15 12.5a3 3 0 1 1-3-3 3.01 3.01 0 0 1 3 3Zm6.375-4.125v8.25a5.25 5.25 0 0 1-5.25 5.25h-8.25a5.25 5.25 0 0 1-5.25-5.25v-8.25a5.25 5.25 0 0 1 5.25-5.25h8.25a5.25 5.25 0 0 1 5.25 5.25ZM16.5 12.5a4.5 4.5 0 1 0-9 0 4.5 4.5 0 0 0 9 0ZM18 7.625a1.125 1.125 0 1 0-2.25 0 1.125 1.125 0 0 0 2.25 0Z" />
                        </svg>
                    </a>
                    <a href="#" class="fx-active trans" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none" viewBox="0 0 24 25">
                            <path fill="#5E625D" d="M22.058 7.445a2.625 2.625 0 0 0-1.853-1.853C18.57 5.15 12 5.15 12 5.15s-6.57 0-8.205.442a2.625 2.625 0 0 0-1.852 1.853A27.097 27.097 0 0 0 1.5 12.5a27.097 27.097 0 0 0 .443 5.055 2.625 2.625 0 0 0 1.852 1.852C5.43 19.85 12 19.85 12 19.85s6.57 0 8.205-.443a2.625 2.625 0 0 0 1.853-1.852c.305-1.668.453-3.36.442-5.055a27.092 27.092 0 0 0-.442-5.055ZM9.9 15.65v-6.3l5.452 3.15L9.9 15.65Z" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
        {{-- Footer --}}
    </div>