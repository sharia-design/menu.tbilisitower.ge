    <div class="detail trans hide">
        {{-- Header --}}
        <div class="detail-header">
            <div class="detail-hader--txt">
                <h3 class="detail-name"></h3>
            </div>
            <button class="detail-close trans fx-active">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
                    <path fill="#5E625D" d="M16 2.667c7.373 0 13.333 5.96 13.333 13.333S23.373 29.333 16 29.333A13.321 13.321 0 0 1 2.667 16C2.667 8.627 8.627 2.667 16 2.667Zm4.787 6.666L16 14.12l-4.787-4.787-1.88 1.88L14.12 16l-4.787 4.787 1.88 1.88L16 17.88l4.787 4.787 1.88-1.88L17.88 16l4.787-4.787-1.88-1.88Z" />
                </svg>
            </button>
        </div>
        {{-- Header --}}
        {{-- Image --}}
        <div class="detail-image--container">
            <img src="{{ asset('public/img/logo-header-bw.svg') }}" alt="item_name" class="detail-image trans">
        </div>
        {{-- Image --}}
        {{-- Meta --}}
        <div class="detail-meta">
            <div class="detail-meta--row">
                <div class="detail-key">{{ __('front.ingred') }}</div>
                <p class="detail-val detail-modal-desc">...</p>
            </div>
            <div class="detail-meta--row detail-alco-row none">
                <div class="detail-key">{{ __('front.alco') }}</div>
                <p class="detail-val detail-alco-val">__°</p>
            </div>
        </div>
        {{-- Meta --}}
        {{-- detail Price --}}
        <div class="detail-price">__₾</div>
        {{-- detail Price --}}
    </div>
