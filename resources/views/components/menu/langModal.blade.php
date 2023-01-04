<div class="lang-drop trans hide">
    <div class="lang-drop__header">
        <strong>{{ __('front.select-lang') }}</strong>
        <button class="lang-drop__close trans fx-active">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32" class="trans">
                <path class="trans" fill="#5E625D" d="M16 2.667c7.373 0 13.333 5.96 13.333 13.333S23.373 29.333 16 29.333A13.321 13.321 0 0 1 2.667 16C2.667 8.627 8.627 2.667 16 2.667Zm4.787 6.666L16 14.12l-4.787-4.787-1.88 1.88L14.12 16l-4.787 4.787 1.88 1.88L16 17.88l4.787 4.787 1.88-1.88L17.88 16l4.787-4.787-1.88-1.88Z" />
            </svg>
        </button>
    </div>

    @php
    $change_lang = '/';
    $lang_uri = request()->segments();
    $remove_lang = array_shift($lang_uri);
    $change_lang = implode('/', $lang_uri);
    @endphp

    <ul class="lang-drop__list">
        <li>
            <a href="/ka/{{ $change_lang }}" class="trans fx-active {{ (App::getLocale('lang') == 'ka') ? 'active' : '' }}">
                <img src="{{ asset('public/img/flag-ka.svg') }}" alt="Flag of Georgia" class="trans" height="24">
                <span class="lang-drop__name">ქართული</span>
            </a>
        </li>
        <li>
            <a href="/ru/{{ $change_lang }}" class="trans fx-active {{ (App::getLocale('lang') == 'ru') ? 'active' : '' }}">
                <img src="{{ asset('public/img/flag-ru.svg') }}" alt="Flag of Georgia" class="trans" height="24">
                <span class="lang-drop__name">Русский</span>
            </a>
        </li>
        <li>
            <a href="/en/{{ $change_lang }}" class="trans fx-active {{ (App::getLocale('lang') == 'en') ? 'active' : '' }}">
                <img src="{{ asset('public/img/flag-en.svg') }}" alt="Flag of Georgia" class="trans" height="24">
                <span class="lang-drop__name">English</span>
            </a>
        </li>
    </ul>
</div>
