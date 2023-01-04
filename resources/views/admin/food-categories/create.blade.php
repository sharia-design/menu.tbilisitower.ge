<x-back.layout>

    <x-slot name="title">დაამატე სასმელების კატეგორია</x-slot>

    <div class="flex bg-transparent items-center justify-center">
        <div class="grid bg-white rounded-lg shadow-xl w-full  md:w-9/12 lg:w-2/3">

            <div class="flex mx-7 mt-5">
                <div class="flex">
                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">სასმლის კატეგორიის დამატება</h1>
                </div>
            </div>

            <form action="/admin/food-categories/create" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Name --}}
                <div class="flex flex-col m-4 p-4 rounded-md border-2 hover:border-blue-300 ease-in">
                    <h4 class="text-lg font-medium">დასახელება</h4>
                    <div class="flex w-full justify-between gap-1 sm:flex-col">
                        {{-- KA --}}
                        <div class="grid grid-cols-1 mt-5">
                            <label for="name_ka" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">ქართული</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="name_ka" id="name_ka" type="text" value="{{ old('name_ka') }}" required placeholder="სასმლის კატეგორია ქართულად" />
                            @error('name_ka')
                            <p class="mt-1 text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- KA --}}

                        {{-- RU --}}
                        <div class="grid grid-cols-1 mt-5">
                            <label for="name_ru" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">რუსულად</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="name_ru" id="name_ru" type="text" value="{{ old('name_ru') }}" required placeholder="На русском языке" />
                            @error('name_ru')
                            <p class="mt-1 text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- RU --}}

                        {{-- EN --}}
                        <div class="grid grid-cols-1 mt-5 ">
                            <label for="name_en" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">ინგლისურად</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" name="name_en" id="name_en" type="text" value="{{ old('name_en') }}" required placeholder="English name" />
                            @error('name_en')
                            <p class="mt-1 text-red-700">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- EN --}}


                    </div>
                </div>

                {{-- Name --}}


                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label for="image" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">
                        სურათი:
                    </label>
                    <div class='flex items-center justify-center w-full'>
                        <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-blue-300 group'>
                            <div class='flex flex-col items-center justify-center pt-7'>
                                <svg class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-blue-600 pt-1 tracking-wider'>
                                    აირჩიე კატეგორიის სურათი</p>
                            </div>
                            <input type='file' id="image" name="image" class="hidden" />
                        </label>
                    </div>
                    @error('image')
                    <p class="mt-1 text-red-700">{{ $message }}</p>
                    @enderror
                </div>


                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label for="place" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">დალაგება:</label>
                        <input class="py-2 px-3 rounded-lg border-2 border-blue-300 mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" type="number" name="place" id="place" value="{{ old('place') }}" required placeholder="მეტი = პრიორიტეტს" />
                        @error('place')
                        <p class="mt-1 text-red-700">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1">
                        <p class="text-sm text-gray-400 mt-4">
                            მთავარ გვერდზე კატეგორიების გამოტანის თანიმდევრობა.
                        </p>
                        <p class="text-gray-400">
                            მაღალ რიცხვს ენიჭება უპირატესობა
                        </p>
                    </div>
                </div>

                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button type="submit" class='w-full mx-7 bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white px-4 py-4'>დაამატება</button>
                </div>

            </form>

        </div>
    </div>



</x-back.layout>
