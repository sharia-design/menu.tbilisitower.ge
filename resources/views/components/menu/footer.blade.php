        <footer>
            <div class="ft-top">
                <a href="{{ route('front.index', ['lang' => App::currentLocale()]) }}" class="ft-logo trans">
                    <img src="{{ asset('public/img/logo-footer.png') }}" alt="Tbilisi Tower Logo" height="32">
                    <span>{{ __('front.tbilisi-tower') }}</span>
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
            <div class="ft-copy">
                <p class="copyright">
                    {{ __('front.all-rights') }} | <strong>{{ __('front.tbilisi-tower') }}</strong> &copy; {{ date('Y') }}
                </p>
                <a href="https://sharia.design/?from=tbilisi-tower-menu" target="_blank" class="sharia-design trans fx-active">
                    By: <span>Sharia.Design</span>
                </a>
            </div>
        </footer>