<x-front.main>

    <div id="main-page">
        {{-- Header --}}
        <header class="header trans">
            {{-- Lang Switcher --}}
            <button class="lang--switcher trans">
                <img src="{{ asset('img/flag-ka.svg') }}" alt="Flag of Georgia" class="lang-flag">
                <span class="lang--txt">GEO</span>
                <span class="lang-arrow trans">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="6" fill="none"
                        viewBox="0 0 11 6">
                        <path fill="#2D2829"
                            d="M10.125 1.422 5.648 5.71a.633.633 0 0 1-.398.164.637.637 0 0 1-.398-.14l-4.5-4.313A.56.56 0 0 1 .328.625a.56.56 0 0 1 .797-.023L5.25 4.539 9.352.602a.56.56 0 0 1 .796.023.56.56 0 0 1-.023.797Z" />
                    </svg>
                </span>
            </button>
            {{-- Lang Switcher --}}

            {{-- Logo --}}
            <a href="{{ route('front.index', ['lang' => App::currentLocale()]) }}" class="header-logo trans">
                <img src="{{ asset('img/logo-header-bw.svg') }}" alt="Tbilisi Tower Logo" height="56">
            </a>
            {{-- Logo --}}

            {{-- Burger Menu Icon --}}
            <button class="burger trans">
                <span class="burger--icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" fill="none"
                        viewBox="0 0 33 32">
                        <path fill="#2D2829" d="M3 4h27v3H3V4Zm9 10.5h18v3H12v-3ZM3 25h27v3H3v-3Z" />
                    </svg>
                </span>
            </button>
            {{-- Burger Menu Icon --}}
        </header>
        {{-- Header --}}

        {{-- Sticky Headline --}}
        <div class="sticky-head trans">
            <h1 class="headline">რესტორნის<span>მენიუ</span></h1>
            {{-- Search --}}
            <form action="@search" class="search-form">
                <input type="search" class="search trans" placeholder="მოძებნე კერძი ან სასმელი" name="search"
                    value="">
                <button type="submit" class="search-submit trans">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path fill="#5E625D"
                            d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5Zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14Z" />
                    </svg>
                </button>
            </form>
            {{-- Search --}}
        </div>
        {{-- Sticky Headline --}}

        {{-- Cateogry Tab --}}
        <div class="category-tabs--container">

            <ul class="category-tabs">
                <li class="cat-tab trans active" data-cat="food">
                    <span class="cat--icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                            viewBox="0 0 32 32">
                            <path fill="#6A888D"
                                d="M7 2a1 1 0 0 1 1 1v6a3 3 0 0 0 2 2.83V3a1 1 0 0 1 2 0v8.83A3 3 0 0 0 14 9V3a1 1 0 0 1 2 0v6a5 5 0 0 1-4 4.9V29a1 1 0 0 1-2 0V13.9A5 5 0 0 1 6 9V3a1 1 0 0 1 1-1Zm13.958 2.958c.318-.32.676-.566 1.042-.728V14h-2V7c0-.674.348-1.434.958-2.042ZM22 16v13a1 1 0 0 0 2 0V3a1 1 0 0 0-1-1c-1.326 0-2.566.652-3.458 1.542C18.652 4.434 18 5.674 18 7v8a1 1 0 0 0 1 1h3Z" />
                        </svg>
                    </span>
                    <h2 class="cat--txt">კერძები</h2>
                </li>
                <li class="cat-tab trans" data-cat="drink">
                    <span class="cat--icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                            viewBox="0 0 32 32">
                            <path fill="#5E625D"
                                d="M24 2a6 6 0 1 1-2.186 11.59L15 22.668V28h3a1 1 0 0 1 0 2h-8a1 1 0 0 1 0-2h3v-5.332L2.4 8.548a2 2 0 0 1-.4-1.2v-.334a1 1 0 0 1 1-1h2.244l-2.048-2.62a1 1 0 0 1 1.576-1.232L7.78 6.014h10.554A6.002 6.002 0 0 1 24 2Zm-3.472 4.014H25a1 1 0 0 1 1 1v.332a2 2 0 0 1-.4 1.2l-2.514 3.35a4 4 0 1 0-2.56-5.88v-.002h.002Zm-11.184 2 4.046 5.18a1 1 0 0 1-1.576 1.23l-5.008-6.41H4.5L14 20.668l9.5-12.654H9.344Z" />
                        </svg>
                    </span>
                    <h2 class="cat--txt">სასმელები</h2>
                </li>
            </ul>
        </div>
        {{-- Cateogry Tab --}}

        {{-- Cateogry Container --}}
        <div class="category-container">
            {{-- Slider: Foods --}}
            <nav class="cat-list trans cat-food active">
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/sadili.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">სადილი</h3>
                </a>
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/lunch.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">ლანჩი</h3>
                </a>
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/soup.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">წვნიანი</h3>
                </a>
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/sadili.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">სადილი</h3>
                </a>
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/lunch.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">ლანჩი</h3>
                </a>
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/soup.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">წვნიანი</h3>
                </a>
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/sadili.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">სადილი</h3>
                </a>
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/lunch.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">ლანჩი</h3>
                </a>
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/soup.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">წვნიანი</h3>
                </a>
            </nav>
            {{-- Slider: Foods --}}

            {{-- Slider: Drinks --}}
            <nav class="cat-list trans cat-drink none">
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/wine.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">ღვინო</h3>
                </a>
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/wisky.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">ვისკი</h3>
                </a>
                <a href="#cat-slug" class="cat-item trans fx-active">
                    <div class="cat-item--img">
                        <img src="{{ asset('cat/cocktail.png') }}" alt="cat_name" width="80" height="80">
                    </div>
                    <h3 class="cat-item--name">კოქტეილი</h3>
                </a>
            </nav>
            {{-- Slider: Drinks --}}
        </div>
        {{-- Cateogry Container --}}

        <main>
            {{-- Main Headline --}}
            <div class="main-head">
                <span class="main-head--type">კერძები</span>
                <h3 class="main-head--cat">ყველა</h3>
            </div>
            {{-- Main Headline --}}

            {{-- Menu Items --}}
            <section class="menu-list">
                {{-- Menu item --}}
                <article class="menu-item trans">
                    <div class="menu-item--image">
                        <img src="{{ asset('food/egg.png') }}" alt="item_name" height="220" class="trans">
                        <span class="zoom-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#EFEFE9"
                                    d="m18.031 16.617 4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617ZM10 10H7v2h3v3h2v-3h3v-2h-3V7h-2v3Z" />
                            </svg>
                        </span>
                    </div>

                    <div class="menu-item--meta">
                        <div class="meta-text">
                            <h4 class="menu-item--name">შემწვარი კვერცხი და ლობიანი</h4>
                            <p class="meta-desc">კვერცი, ცომი, სალათის ფურცელი</p>
                        </div>
                        <div class="meta-price">
                            <strong class="price">11.00 ₾</strong>
                        </div>
                    </div>
                </article>
                {{-- Menu item --}}

                {{-- Menu item --}}
                <article class="menu-item trans">
                    <div class="menu-item--image">
                        <img src="{{ asset('food/gori.png') }}" alt="item_name" height="220" class="trans">
                        <span class="zoom-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#EFEFE9"
                                    d="m18.031 16.617 4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617ZM10 10H7v2h3v3h2v-3h3v-2h-3V7h-2v3Z" />
                            </svg>
                        </span>
                    </div>

                    <div class="menu-item--meta">
                        <div class="meta-text">
                            <h4 class="menu-item--name">შემწვარი ხინაკლი ოჯახურის გემოთი</h4>
                            <p class="meta-desc">კვერცი, ცომი, სალათის ფურცელი, პომიდორი, კიტრი, ხახვი</p>
                        </div>
                        <div class="meta-price">
                            <strong class="price">56,50 ₾</strong>
                        </div>
                    </div>
                </article>
                {{-- Menu item --}}

                {{-- Menu item --}}
                <article class="menu-item trans">
                    <div class="menu-item--image">
                        <img src="{{ asset('food/mangus.png') }}" alt="item_name" height="220" class="trans">
                        <span class="zoom-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#EFEFE9"
                                    d="m18.031 16.617 4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617ZM10 10H7v2h3v3h2v-3h3v-2h-3V7h-2v3Z" />
                            </svg>
                        </span>
                    </div>

                    <div class="menu-item--meta">
                        <div class="meta-text">
                            <h4 class="menu-item--name">მანგუსის მარცლოვანი ვნიანი</h4>
                            <p class="meta-desc">კვერცი, ცომი, სალათის ფურცელი</p>
                        </div>
                        <div class="meta-price">
                            <strong class="price">29.00 ₾</strong>
                        </div>
                    </div>
                </article>
                {{-- Menu item --}}

                {{-- Menu item --}}
                <article class="menu-item trans">
                    <div class="menu-item--image">
                        <img src="{{ asset('food/egg.png') }}" alt="item_name" height="220" class="trans">
                        <span class="zoom-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#EFEFE9"
                                    d="m18.031 16.617 4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617ZM10 10H7v2h3v3h2v-3h3v-2h-3V7h-2v3Z" />
                            </svg>
                        </span>
                    </div>

                    <div class="menu-item--meta">
                        <div class="meta-text">
                            <h4 class="menu-item--name">შემწვარი კვერცხი და ლობიანი</h4>
                            <p class="meta-desc">კვერცი, ცომი, სალათის ფურცელი</p>
                        </div>
                        <div class="meta-price">
                            <strong class="price">11.00 ₾</strong>
                        </div>
                    </div>
                </article>
                {{-- Menu item --}}

                {{-- Menu item --}}
                <article class="menu-item trans">
                    <div class="menu-item--image">
                        <img src="{{ asset('food/egg.png') }}" alt="item_name" height="220" class="trans">
                        <span class="zoom-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#EFEFE9"
                                    d="m18.031 16.617 4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617ZM10 10H7v2h3v3h2v-3h3v-2h-3V7h-2v3Z" />
                            </svg>
                        </span>
                    </div>

                    <div class="menu-item--meta">
                        <div class="meta-text">
                            <h4 class="menu-item--name">შემწვარი კვერცხი და ლობიანი</h4>
                            <p class="meta-desc">კვერცი, ცომი, სალათის ფურცელი</p>
                        </div>
                        <div class="meta-price">
                            <strong class="price">11.00 ₾</strong>
                        </div>
                    </div>
                </article>
                {{-- Menu item --}}

                {{-- Menu item --}}
                <article class="menu-item trans">
                    <div class="menu-item--image">
                        <img src="{{ asset('food/egg.png') }}" alt="item_name" height="220" class="trans">
                        <span class="zoom-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#EFEFE9"
                                    d="m18.031 16.617 4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617ZM10 10H7v2h3v3h2v-3h3v-2h-3V7h-2v3Z" />
                            </svg>
                        </span>
                    </div>

                    <div class="menu-item--meta">
                        <div class="meta-text">
                            <h4 class="menu-item--name">შემწვარი კვერცხი და ლობიანი</h4>
                            <p class="meta-desc">კვერცი, ცომი, სალათის ფურცელი</p>
                        </div>
                        <div class="meta-price">
                            <strong class="price">11.00 ₾</strong>
                        </div>
                    </div>
                </article>
                {{-- Menu item --}}

                {{-- Menu item --}}
                <article class="menu-item trans">
                    <div class="menu-item--image">
                        <img src="{{ asset('food/egg.png') }}" alt="item_name" height="220" class="trans">
                        <span class="zoom-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#EFEFE9"
                                    d="m18.031 16.617 4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617ZM10 10H7v2h3v3h2v-3h3v-2h-3V7h-2v3Z" />
                            </svg>
                        </span>
                    </div>

                    <div class="menu-item--meta">
                        <div class="meta-text">
                            <h4 class="menu-item--name">შემწვარი კვერცხი და ლობიანი</h4>
                            <p class="meta-desc">კვერცი, ცომი, სალათის ფურცელი</p>
                        </div>
                        <div class="meta-price">
                            <strong class="price">11.00 ₾</strong>
                        </div>
                    </div>
                </article>
                {{-- Menu item --}}

                {{-- Menu item --}}
                <article class="menu-item trans">
                    <div class="menu-item--image">
                        <img src="{{ asset('food/egg.png') }}" alt="item_name" height="220" class="trans">
                        <span class="zoom-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#EFEFE9"
                                    d="m18.031 16.617 4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617ZM10 10H7v2h3v3h2v-3h3v-2h-3V7h-2v3Z" />
                            </svg>
                        </span>
                    </div>

                    <div class="menu-item--meta">
                        <div class="meta-text">
                            <h4 class="menu-item--name">შემწვარი კვერცხი და ლობიანი</h4>
                            <p class="meta-desc">კვერცი, ცომი, სალათის ფურცელი</p>
                        </div>
                        <div class="meta-price">
                            <strong class="price">11.00 ₾</strong>
                        </div>
                    </div>
                </article>
                {{-- Menu item --}}

                {{-- Menu item --}}
                <article class="menu-item trans">
                    <div class="menu-item--image">
                        <img src="{{ asset('food/egg.png') }}" alt="item_name" height="220" class="trans">
                        <span class="zoom-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#EFEFE9"
                                    d="m18.031 16.617 4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617ZM10 10H7v2h3v3h2v-3h3v-2h-3V7h-2v3Z" />
                            </svg>
                        </span>
                    </div>

                    <div class="menu-item--meta">
                        <div class="meta-text">
                            <h4 class="menu-item--name">შემწვარი კვერცხი და ლობიანი</h4>
                            <p class="meta-desc">კვერცი, ცომი, სალათის ფურცელი</p>
                        </div>
                        <div class="meta-price">
                            <strong class="price">11.00 ₾</strong>
                        </div>
                    </div>
                </article>
                {{-- Menu item --}}
            </section>
            {{-- Menu Items --}}

        </main>

        {{-- Footer --}}
        <footer>
            <div class="ft-top">
                <a href="{{ route('front.index') }}" class="ft-logo trans">
                    <img src="{{ asset('img/logo-footer.png') }}" alt="Tbilisi Tower Logo" height="32">
                    <span>Tbilisi Tower</span>
                </a>
                <nav class="social-links">
                    <a href="#" class="fx-active trans" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"
                            viewBox="0 0 24 25">
                            <path fill="#5E625D"
                                d="M22 12.5c0-5.52-4.48-10-10-10S2 6.98 2 12.5c0 4.84 3.44 8.87 8 9.8v-6.8H8v-3h2V10c0-1.93 1.57-3.5 3.5-3.5H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95Z" />
                        </svg>
                    </a>
                    <a href="#" class="fx-active trans" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"
                            viewBox="0 0 24 25">
                            <path fill="#5E625D"
                                d="M15 12.5a3 3 0 1 1-3-3 3.01 3.01 0 0 1 3 3Zm6.375-4.125v8.25a5.25 5.25 0 0 1-5.25 5.25h-8.25a5.25 5.25 0 0 1-5.25-5.25v-8.25a5.25 5.25 0 0 1 5.25-5.25h8.25a5.25 5.25 0 0 1 5.25 5.25ZM16.5 12.5a4.5 4.5 0 1 0-9 0 4.5 4.5 0 0 0 9 0ZM18 7.625a1.125 1.125 0 1 0-2.25 0 1.125 1.125 0 0 0 2.25 0Z" />
                        </svg>
                    </a>
                    <a href="#" class="fx-active trans" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"
                            viewBox="0 0 24 25">
                            <path fill="#5E625D"
                                d="M22.058 7.445a2.625 2.625 0 0 0-1.853-1.853C18.57 5.15 12 5.15 12 5.15s-6.57 0-8.205.442a2.625 2.625 0 0 0-1.852 1.853A27.097 27.097 0 0 0 1.5 12.5a27.097 27.097 0 0 0 .443 5.055 2.625 2.625 0 0 0 1.852 1.852C5.43 19.85 12 19.85 12 19.85s6.57 0 8.205-.443a2.625 2.625 0 0 0 1.853-1.852c.305-1.668.453-3.36.442-5.055a27.092 27.092 0 0 0-.442-5.055ZM9.9 15.65v-6.3l5.452 3.15L9.9 15.65Z" />
                        </svg>
                    </a>
                </nav>
            </div>
            <div class="ft-copy">
                <p class="copyright">
                    ყველა უფლება დაცულია | <strong>თბილისი თაუერ</strong> &copy; {{ date('Y') }}
                </p>
                <a href="https://sharia.desing/?from=tbilisi-tower-menu" target="_blank"
                    class="sharia-design trans fx-active">
                    By: <span>Sharia.Design</span>
                </a>
            </div>
        </footer>
        {{-- Footer --}}

    </div> <!-- #end Main Page -->


    <!-- Hidden: UI -->
    <div class="blur trans none"></div>

    {{-- Modal: Language  --}}
    <div class="lang-drop trans hide">
        <div class="lang-drop__header">
            <strong>აირჩიე ენა</strong>
            <button class="lang-drop__close trans fx-active">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                    viewBox="0 0 32 32"
                    class="trans">
                    <path class="trans" fill="#5E625D"
                        d="M16 2.667c7.373 0 13.333 5.96 13.333 13.333S23.373 29.333 16 29.333A13.321 13.321 0 0 1 2.667 16C2.667 8.627 8.627 2.667 16 2.667Zm4.787 6.666L16 14.12l-4.787-4.787-1.88 1.88L14.12 16l-4.787 4.787 1.88 1.88L16 17.88l4.787 4.787 1.88-1.88L17.88 16l4.787-4.787-1.88-1.88Z" />
                </svg>
            </button>
        </div>

        <ul class="lang-drop__list">
            <li>
                <a href="#ka" class="trans fx-active active">
                    <img src="{{ asset('img/flag-ka.svg') }}" alt="Flag of Georgia" class="trans" height="24">
                    <span class="lang-drop__name">ქართული</span>
                </a>
            </li>
            <li>
                <a href="#ru" class="trans fx-active">
                    <img src="{{ asset('img/flag-ru.svg') }}" alt="Flag of Georgia" class="trans" height="24">
                    <span class="lang-drop__name">Русский</span>
                </a>
            </li>
            <li>
                <a href="#en" class="trans fx-active">
                    <img src="{{ asset('img/flag-en.svg') }}" alt="Flag of Georgia" class="trans" height="24">
                    <span class="lang-drop__name">English</span>
                </a>
            </li>
        </ul>
    </div>
    {{-- Modal: Language  --}}

    {{-- Modal: Item Detail --}}
    <div class="detail trans hide">
        {{-- Header --}}
        <div class="detail-header">
            <div class="detail-hader--txt">
                <div class="detail-type">კოქტეილი</div>
                <h3 class="detail-name">კოსმოპოლიტანი</h3>
            </div>
            <button class="detail-close trans fx-active">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                    viewBox="0 0 32 32">
                    <path fill="#5E625D"
                        d="M16 2.667c7.373 0 13.333 5.96 13.333 13.333S23.373 29.333 16 29.333A13.321 13.321 0 0 1 2.667 16C2.667 8.627 8.627 2.667 16 2.667Zm4.787 6.666L16 14.12l-4.787-4.787-1.88 1.88L14.12 16l-4.787 4.787 1.88 1.88L16 17.88l4.787 4.787 1.88-1.88L17.88 16l4.787-4.787-1.88-1.88Z" />
                </svg>
            </button>
        </div>
        {{-- Header --}}
        {{-- Image --}}
        <div class="detail-image--container">
            <img src="{{ asset('drink/cosmopolitan.png') }}" alt="item_name" class="detail-image trans">
        </div>
        {{-- Image --}}
        {{-- Meta --}}
        <div class="detail-meta">
            <div class="detail-meta--row">
                <div class="detail-key">ინგრედიენტები</div>
                <p class="detail-val">მარწყვი, ქოქოსი, ზეთის ხილი და მანდარინის კანი</p>
            </div>
            <div class="detail-meta--row">
                <div class="detail-key">ალკოჰოლი</div>
                <p class="detail-val">11°</p>
            </div>
        </div>
        {{-- Meta --}}
        {{-- detail Price --}}
        <div class="detail-price">22.00 ₾</div>
        {{-- detail Price --}}
    </div>
    {{-- Modal: Item Detail --}}

    {{-- Menu Off-canvas --}}
    <div class="off-menu trans hide">
        {{-- Header --}}
        <div class="off-menu-header">
            <a href="{{ route('front.index') }}" class="off-menu-logo fx-active trans">
                <img src="{{ asset('img/logo-menu-bw.svg') }}" alt="Tbilisi Tower Menu" height="56">
            </a>
            <button class="off-menu-close trans">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none"
                    viewBox="0 0 32 32" class="trans">
                    <path fill="#2D2829"
                        d="m8.533 25.333-1.866-1.866L14.133 16 6.667 8.533l1.866-1.866L16 14.133l7.467-7.466 1.866 1.866L17.867 16l7.466 7.467-1.866 1.866L16 17.867l-7.467 7.466Z" />
                </svg>
            </button>
        </div>
        {{-- Header --}}
        {{-- Navigation --}}
        <nav class="off-menu-nav">
            <a href="#food" class="fx-active trans active">კერძები</a>
            <a href="#food" class="fx-active trans">სასმელები</a>
        </nav>
        {{-- Navigation --}}
        {{-- Lang Switcher --}}
        <ul class="off-menu-lang">
            {{-- KA --}}
            <li>
                <a href="#ka" class="trans active">
                    <img src="{{ asset('img/flag-ka.svg') }}" class="off-menu-flag" alt="Flag of Georgia"
                        height="16">
                    <span class="off-menu-lang--name">ქართული</span>
                </a>
            </li>
            {{-- KA --}}
            {{-- RU --}}
            <li>
                <a href="#ru" class="trans">
                    <img src="{{ asset('img/flag-ru.svg') }}" class="off-menu-flag" alt="Flag of Russia"
                        height="16">
                    <span class="off-menu-lang--name">Русский</span>
                </a>
            </li>
            {{-- RU --}}
            {{-- EN --}}
            <li>
                <a href="#en" class="trans">
                    <img src="{{ asset('img/flag-en.svg') }}" class="off-menu-flag" alt="Flag of United Kingdom"
                        height="16">
                    <span class="off-menu-lang--name">English</span>
                </a>
            </li>
            {{-- EN --}}
        </ul>
        {{-- Lang Switcher --}}

        {{-- Search --}}
        <form action="@searcg" method="POST" class="off-menu-search__form">
            <input type="search trans" class="off-menu-search trans" name="query"
                placeholder="მოძებნე კერძი, სასმელი ან სხვა">
            <button class="off-menu-search--btn trans" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24" class="trans">
                    <path fill="#5E625D"
                        d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5Zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14Z" />
                </svg>
            </button>
        </form>
        {{-- Search --}}

        {{-- Footer --}}
        <div class="off-menu-footer">
            <div class="off-menu-ft--row">
                <div class="off-ft-block">
                    <h5>კონტაქტი</h5>
                    <p>ტელ: <a href="tel:123" class="trans">+(995) 599 81 88 88</a></p>
                    <p>ელ.ფოსტა: <a href="mailto:info@tbilisitower.ge" class="trans">info@tbilisitower.ge</a></p>
                </div>
                <div class="off-ft-block">
                    <h5>მისამართი</h5>
                    <p>Agmashenebeli Alley 7 th km Tbilisi, 0131</p>
                </div>
            </div>
            <div class="off-menu-ft--row">
                <a href="{{ route('front.index') }}" class="ft-logo trans">
                    <img src="{{ asset('img/logo-footer.png') }}" alt="Tbilisi Tower Logo" height="32">
                    <span>Tbilisi Tower</span>
                </a>
                <nav class="social-links">
                    <a href="#" class="fx-active trans" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"
                            viewBox="0 0 24 25">
                            <path fill="#5E625D"
                                d="M22 12.5c0-5.52-4.48-10-10-10S2 6.98 2 12.5c0 4.84 3.44 8.87 8 9.8v-6.8H8v-3h2V10c0-1.93 1.57-3.5 3.5-3.5H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95Z" />
                        </svg>
                    </a>
                    <a href="#" class="fx-active trans" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"
                            viewBox="0 0 24 25">
                            <path fill="#5E625D"
                                d="M15 12.5a3 3 0 1 1-3-3 3.01 3.01 0 0 1 3 3Zm6.375-4.125v8.25a5.25 5.25 0 0 1-5.25 5.25h-8.25a5.25 5.25 0 0 1-5.25-5.25v-8.25a5.25 5.25 0 0 1 5.25-5.25h8.25a5.25 5.25 0 0 1 5.25 5.25ZM16.5 12.5a4.5 4.5 0 1 0-9 0 4.5 4.5 0 0 0 9 0ZM18 7.625a1.125 1.125 0 1 0-2.25 0 1.125 1.125 0 0 0 2.25 0Z" />
                        </svg>
                    </a>
                    <a href="#" class="fx-active trans" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"
                            viewBox="0 0 24 25">
                            <path fill="#5E625D"
                                d="M22.058 7.445a2.625 2.625 0 0 0-1.853-1.853C18.57 5.15 12 5.15 12 5.15s-6.57 0-8.205.442a2.625 2.625 0 0 0-1.852 1.853A27.097 27.097 0 0 0 1.5 12.5a27.097 27.097 0 0 0 .443 5.055 2.625 2.625 0 0 0 1.852 1.852C5.43 19.85 12 19.85 12 19.85s6.57 0 8.205-.443a2.625 2.625 0 0 0 1.853-1.852c.305-1.668.453-3.36.442-5.055a27.092 27.092 0 0 0-.442-5.055ZM9.9 15.65v-6.3l5.452 3.15L9.9 15.65Z" />
                        </svg>
                    </a>
                </nav>
            </div>
        </div>
        {{-- Footer --}}
    </div>
    {{-- Menu Off-canvas --}}

    <!-- #end Hidden: UI -->

    <!-- Scripts: -->
    <script src="{{ asset('js/main.js?v=0.1') }}"></script>


</x-front.main>
