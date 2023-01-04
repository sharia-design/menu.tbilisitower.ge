<x-front.main>

    <x-slot name="title">{{ $cat['name_'. App::getLocale('lang')] }}</x-slot>

    <div id="main-page">
        {{-- Header --}}
        @include('components.menu.header')

        {{-- Sticky Headline --}}
        @include('components.menu.sticky')


        {{-- Cateogry Container --}}
        @include('components.menu.category_container')

        <main>
            {{-- Main Headline --}}
            <div class="main-head">
                <span class="main-head--type">{{ __('front.venue') }}</span>
                <h3 class="main-head--cat">{{ $cat['name_'. App::getLocale('lang')] }}</h3>
            </div>
            {{-- Main Headline --}}

            {{-- Menu Items --}}
            <section class="menu-list">
            
                @foreach ($items as $food)
                    
                {{-- Menu item --}}
                <article class="menu-item trans" data-id={{ $food->id }} " data-menu="food">
                    <div class="menu-item--image">
                        <img src="{{ asset('public/uploads/food/'.$food->image) }}" alt="item_name" height="220" class="trans">
                        <span class="zoom-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="#EFEFE9" d="m18.031 16.617 4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617ZM10 10H7v2h3v3h2v-3h3v-2h-3V7h-2v3Z" />
                            </svg>
                        </span>
                    </div>

                    <div class="menu-item--meta">
                        <div class="meta-text">
                            <h4 class="menu-item--name">{{ $food['name_'.App::getLocale('lang')] }}</h4>
                            <p class="meta-desc">{{ $food['desc_'.App::getLocale('lang')] }}</p>
                        </div>
                        <div class="meta-price">
                            <strong class="price">{{ $food->price }} ₾</strong>
                        </div>
                    </div>
                </article>
                {{-- Menu item --}}
                @endforeach

            </section>
            {{-- Menu Items --}}

        </main>
       {{-- Footer --}}
        @include('components.menu.footer')

    </div> <!-- #end Main Page -->

    <!-- Hidden: UI -->
    <div class="blur trans none"></div>

    {{-- Modal: Language  --}}

    @include('components.menu.langModal')

    {{-- Modal: Language  --}}

    {{-- Modal: Item Detail --}}
    @include('components.menu.modal-detail')

    {{-- Menu Off-canvas --}}
    @include('components.menu.modal-menu')

    <!-- #end Hidden: UI -->

</x-front.main>
