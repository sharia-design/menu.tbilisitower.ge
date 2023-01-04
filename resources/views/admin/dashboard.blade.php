<x-back.layout>

    <x-slot name="title">სამართავი პანელი - Tbilisi Tower</x-slot>

    <main class="w-full">
        <div class="px-6 py-8">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-3xl p-8 mb-5">
                    <h1 class="text-3xl font-bold mb-10">დაამატე და მართე მენიუ კატეგორიების მიხედვით</h1>

                    <div class="grid grid-cols-2 gap-x-20">
                        <div>
                            <h2 class="text-lg font-bold mb-4">სტატისტიკა</h2>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="col-span-2">
                                    <div class="p-4 bg-green-100 rounded-xl">
                                        <div class="font-bold text-base text-gray-800 leading-none">დაამატე მენიუში</div>
                                        <div class="mt-5">
                                            <a href="{{ route('admin.food.create') }}" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                                კერძი
                                            </a>
                                            <a href="{{ route('admin.drink.create') }}" class="inline-flex items-center justify-center py-2 px-3 rounded-xl bg-white text-gray-800 hover:text-green-500 text-sm font-semibold transition">
                                                სასმელი
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                    <div class="font-bold text-2xl leading-none">
                                        {{ $foodsCount }}
                                    </div>
                                    <div class="mt-2">კერძი</div>
                                </div>
                                <div class="p-4 bg-yellow-100 rounded-xl text-gray-800">
                                    <div class="font-bold text-2xl leading-none">
                                        {{ $drinksCount }}
                                    </div>
                                    <div class="mt-2">სასმელი</div>
                                </div>
                                <div class="col-span-2">
                                    <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                                        <div class="font-bold text-xl leading-none">კატეგორიები</div>
                                        <div class="mt-2">{{ $foodCatsCount }} კერძის და {{ $drinkCatsCount }} სასმლის.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-lg font-bold mb-4">ბოლოს დამატებული</h2>

                            <div class="space-y-4 overflow-y-auto h-80">

@foreach ($latests as $item)
    
                                <div class="p-4 bg-white border rounded-xl text-gray-800 space-y-2">
                                    <div class="flex justify-between">
                                        <div class="text-gray-700 text-s">{{ $item->price }} ₾</div>
                                        <div class="text-gray-400 text-xs">{{ $item->updated_at }}</div>
                                    </div>
                                    <h4 class="font-bold hover:text-yellow-800 hover:underline">{{ $item->name_ka }}</h4>
                                </div>
@endforeach
                                

                            </div>
                        </div>
                    </div>
                </div>


                <div class="flex items-center justify-between">
                    <div class="flex items-stretch">
                        <div class="text-gray-400 text-xs">ტექნიკური<br>დახმარება</div>
                        <div class="h-100 border-l mx-4"></div>
                        <div class="flex flex-nowrap -space-x-3">
                            <div class="h-9 w-9 whitespace-nowrap">
                                saba@sharia.design <br>
                                599-348-256
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-10">

            </div>

        </div>
    </main>

</x-back.layout>
