<x-back.layout>

    <x-slot name="title">კერძის რედაქტირება</x-slot>

    <div class="flex bg-transparent items-center justify-center">
        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">

            <div class="flex mx-7 mt-5">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">კერძის რედაქტირება</h1>
                </div>
            </div>

            <form action="{{ route('admin.food.update', $food->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                {{-- Name --}}
                <div class="flex flex-col m-4 p-4 rounded-md border-2 hover:border-blue-300 ease-in">
                    <h4 class="text-lg font-medium">დასახელება</h4>
                    <div class="flex w-full justify-between gap-1 sm:flex-col">
                        {{-- KA --}}
                        <div class="grid grid-cols-1 mt-5">
                            <label for="name_ka" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">ქართული</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="name_ka" id="name_ka" type="text" value="{{ $food->name_ka }}" required placeholder="კერძის დასახელება ქართულად" />
                            @error('name_ka')
                            <p class="mt-1 text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- KA --}}

                        {{-- RU --}}
                        <div class="grid grid-cols-1 mt-5">
                            <label for="name_ru" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">რუსულად</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="name_ru" id="name_ru" type="text" value="{{ $food->name_ru }}" required placeholder="На русском языке" />
                            @error('name_ru')
                            <p class="mt-1 text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- RU --}}

                        {{-- EN --}}
                        <div class="grid grid-cols-1 mt-5 ">
                            <label for="name_en" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">ინგლისურად</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="name_en" id="name_en" type="text" value="{{ $food->name_en }}" required placeholder="English name" />
                            @error('name_en')
                            <p class="mt-1 text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- EN --}}


                    </div>
                </div>

                {{-- Name --}}


                {{-- Description --}}
                <div class="flex flex-col m-4 p-4 rounded-md border-2 hover:border-blue-300 ease-in">
                    <h4 class="text-lg font-medium">აღწერა</h4>
                    <p class="my-1 text-gray-500 text-xs">კერძის ინგრედიენტები ან მოკლე აღწერა.</p>
                    <div class="flex w-full justify-between gap-1 sm:flex-col">
                        {{-- KA --}}
                        <div class="grid grid-cols-1 mt-5">
                            <label for="desc_ka" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">ქართულად</label>
                            <textarea class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="desc_ka" id="desc_ka" placeholder="წყალი, ლიმონი, ხორცი...">{{ $food->desc_ka }}</textarea>
                            @error('desc_ka')
                            <p class="mt-1 text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- KA --}}
                        {{-- RU --}}
                        <div class="grid grid-cols-1 mt-5">
                            <label for="desc_ru" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">რუსულად</label>
                            <textarea class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="desc_ru" id="desc_ru" placeholder="Вода, лимон, мясо...">{{ $food->desc_ru }}</textarea>
                            @error('desc_ru')
                            <p class="mt-1 text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- RU --}}
                        {{-- EN --}}
                        <div class="grid grid-cols-1 mt-5">
                            <label for="desc_en" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">ინგლისურად</label>
                            <textarea class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="desc_en" id="desc_en" placeholder="Water, lemon, meat...">{{ $food->desc_en }}</textarea>
                            @error('desc_en')
                            <p class="mt-1 text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- EN --}}

                    </div>
                </div>

                {{-- Description --}}

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label for="image" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">
                        მთავარი ფოტო:
                    </label>
                    <a href="{{ asset('public/uploads/food/' . $food->image) }}" target="_blank">
                        <img src="{{ asset('public/uploads/food/' . $food->image) }}" class="float-left block my-2 h-12">
                    </a>
                    <p class="my-1 text-gray-500 text-xs">სასურველი რეზოლუცია: <strong>740x640 px</strong>
                        <a href="https://spark.adobe.com/tools/image-resize/" class="text-blue-600 ml-3 underline hover:text-blue-800" target="_blank">ფოტოს ზომის
                            შეცვლა</a>.
                    </p>
                    <div class='flex items-center justify-center w-full'>
                        <label for="image" class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                    აირჩიე ფოტო</p>
                            </div>
                            <input type='file' id="image" name="image" accept='image/*' class="hidden" />
                        </label>
                    </div>
                    @error('image')
                    <p class="mt-1 text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label for="cat_ids" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">
                        კატეგორია:
                    </label>
                    <select multiple id="cat_ids" name="cat_ids[]" class="py-2 bg-transparent px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                        @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}" {{ in_array($cat->id, $cats) ? 'selected' : '' }}>{{ $cat->name_ka }}</option>
                        @endforeach
                    </select>
                    <p class="text-xs text-black-300 mt-2">
                        რამოდენიმეს ერთდად მოსანიშნად დააჭირე <strong><kbd>Ctrl</kbd> + Click</strong>
                    </p>
                    @error('cat_ids')
                    <p class="mt-1 text-red-700">აირჩიე მინიმუმ 1 კატეგორია</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label for="price" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">ფასი</label>
                    <p class="my-1 text-gray-500 text-xs">მხოლოდ რიცხი. ვალუტის გარეშე.</p>
                    <input class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="price" id="price" type="text" value="{{ $food->price }}" required placeholder="20,40" />
                    @error('price')
                    <p class="mt-1 text-red-700">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label for="place" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">დალაგება:</label>
                        <input class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" type="number" name="place" min="0" id="place" value="{{ $food->place }}" required placeholder="მეტი = პრიორიტეტს" />
                        @error('place')
                        <p class="mt-1 text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1">
                        <p class="text-sm text-gray-400 mt-4">
                            მენიუში ამ კერძის გამოჩენის თანიმდევრობა.
                        </p>
                        <p class="text-gray-400">
                            მაღალ რიცხვს ენიჭება უპირატესობა
                        </p>
                    </div>
                </div>

                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button type="submit" class='w-full mx-7 bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white px-4 py-4'>
                        განახლება
                    </button>
                </div>

            </form>

        </div>
    </div>

</x-back.layout>
