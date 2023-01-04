<x-back.layout>

    <x-slot name="title">კერძები</x-slot>

    <div class="flex justify-between items-center">

        <h1 class="text-3xl">კერძები</h1>

        <a href="{{ route('admin.food.create') }}" class="block transition text-white bg-blue-700 py-3 px-4 rounded-lg hover:bg-blue-600 flex justify-between items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
            </svg>
            <span class="pl-4">დამატება</span>
        </a>
    </div>
    <hr class="my-4">

    <div class="container">


        <!-- component -->
        <section class="container mx-auto p-6 font-mono">
            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                <div class="w-full overflow-x-auto">
                    <table class="w-full border border-collapse table-auto border-spacing-y-0.5 hover">
                        <thead>
                            <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-200 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">სურათი</th>
                                <th class="px-4 py-3">ქართულად</th>
                                <th class="px-4 py-3">РУССКИЙ</th>
                                <th class="px-4 py-3">English</th>
                                <th class="px-4 py-3">აღწერა</th>
                                <th class="px-4 py-3">ფასი</th>
                                <th class="px-4 py-3">კატეგორია</th>
                                <th class="px-4 py-3">მოქმედება</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">

                            @foreach ($foods as $food)

                            <tr class="text-gray-700 hover:text-gray-900 hover:bg-gray-100">
                                <td class="px-4 py-3 border">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full">
                                            <img class="object-cover w-full h-full rounded-full" src="{{ asset('public/uploads/food/' . $food->image) }}" alt="" loading="lazy" />
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 border font-semibold text-base">{{ $food->name_ka }}</td>
                                <td class="px-4 py-3 border font-semibold text-base">{{ $food->name_ru }}</td>
                                <td class="px-4 py-3 border font-semibold text-base">{{ $food->name_en }}</td>
                                <td class="px-4 py-3 border font-semibold text-sm">
                                    <ul class="flex flex-col gap-4">
                                        <li class="pb-3 bt-1 border-b-2">
                                            <p class="text-xs">ქართულად</p>
                                            <strong class="mt-1 block text-base">{{ $food->desc_ka }}</strong>
                                        </li>
                                        <li class="pb-3 bt-1 border-b-2">
                                            <p class="text-xs">РУССКИЙ:</p>
                                            <strong class="mt-1 block text-base">{{ $food->desc_ru }}</strong>
                                        </li>
                                        <li class="pb-3 bt-1 border-b-2">
                                            <p class="text-xs">English</p>
                                            <strong class="mt-1 block text-base">{{ $food->desc_en }}</strong>
                                        </li>
                                    </ul>
                                </td>
                                <td class="px-4 py-3 border text-md font-semibold">
                                    <span class="mr-1 whitespace-nowrap	px-2 py-1 font-light hover:text-green-800 hover:bg-green-200 transition leading-tight text-green-700 bg-green-100 rounded-sm">
                                        {{ $food->price }} ₾
                                    </span>
                                </td>
                                <td class="px-4 py-3 border text-sm">
                                        @foreach ($food->categories as $cat)
                                            <span
                                                class="whitespace-nowrap mr-1 mb-1 mt-4 block px-2 py-1 font-light hover:text-gray-800 hover:bg-gray-200 transition leading-tight text-gray-700 bg-gray-100 rounded-sm">
                                                📋
                                                {{ $cat->name_ka }}
                                            </span>
                                        @endforeach
                                </td>
                                <td class="px-4 py-3 border text-sm">
                                    <a href="{{ route('admin.food.edit', $food->id) }}" class="block px-2 transition bg-indigo-400 rounded text-center py-1.5 mb-1 text-white hover:bg-indigo-500">
                                        რედაქტირება
                                    </a>
                                    <form action="{{ route('admin.food.delete', $food->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <button onclick="if(!confirm(`წავშალო კერძი: {{ $food->name_ka }}?`)){return false;}" class="block w-full transition bg-red-400 rounded text-center py-1.5 mb-1 text-white hover:bg-red-500 delete">
                                            წაშლა
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>


    </div>


</x-back.layout>
