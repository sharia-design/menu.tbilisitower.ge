<header class="header trans">
            {{-- Lang Switcher --}}
            <button class="lang--switcher trans">
                <img src="{{ asset('public/img/flag-'.App::getLocale('lang').'.svg') }}" alt="Flag of Georgia" class="lang-flag">
                <span class="lang--txt">
                    @if(App::getLocale('lang') == 'ka')
                        GEO
                    @endif
                    @if(App::getLocale('lang') == 'ru')
                        RUS
                    @endif
                    @if(App::getLocale('lang') == 'en')
                        ENG
                    @endif
                </span>
                <span class="lang-arrow trans">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="6" fill="none" viewBox="0 0 11 6">
                        <path fill="#2D2829" d="M10.125 1.422 5.648 5.71a.633.633 0 0 1-.398.164.637.637 0 0 1-.398-.14l-4.5-4.313A.56.56 0 0 1 .328.625a.56.56 0 0 1 .797-.023L5.25 4.539 9.352.602a.56.56 0 0 1 .796.023.56.56 0 0 1-.023.797Z" />
                    </svg>
                </span>
            </button>
            {{-- Lang Switcher --}}
            
            {{-- Logo --}}
            <a href="{{ route('front.index', ['lang' => App::currentLocale()]) }}" class="header-logo trans">
                <img src="{{ asset('public/img/logo-header-bw.svg') }}" alt="Tbilisi Tower Logo" height="56">
            </a>
            {{-- Logo --}}

            {{-- Burger Menu Icon --}}
            <button class="burger trans">
                <span class="burger--icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" fill="none" viewBox="0 0 33 32">
                        <path fill="#2D2829" d="M3 4h27v3H3V4Zm9 10.5h18v3H12v-3ZM3 25h27v3H3v-3Z" />
                    </svg>
                </span>
            </button>
            {{-- Burger Menu Icon --}}
        </header>