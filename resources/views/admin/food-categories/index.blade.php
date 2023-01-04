<x-back.layout>

    <x-slot name="title">საჭმლის კატეგორიები</x-slot>

    <div class="flex justify-between items-center">

        <h1 class="text-3xl">საჭმლის კატეგორიები</h1>

        <a href="{{ route('admin.food-cat.create') }}"
            class="block transition text-white bg-blue-700 py-3 px-4 rounded-lg hover:bg-blue-600 flex justify-between items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                    clip-rule="evenodd" />
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
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">სურათი</th>
                                <th class="px-4 py-3">ქართულად</th>
                                <th class="px-4 py-3">Русский</th>
                                <th class="px-4 py-3">English</th>
                                <th class="px-4 py-3">პოზიცია</th>
                                <th class="px-4 py-3">მოქმედება</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">

                            @foreach ($categories as $cat)

                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm">
                                            <div class="relative w-10 h-10 mr-3 rounded-full">
                                                <a href="{{ asset('public/uploads/cats/' . $cat->image) }}" target="_blank">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="{{ asset('public/uploads/cats/' . $cat->image) }}" alt=""
                                                    loading="lazy" />
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 border text-sm">{{ $cat->name_ka }}</td>
                                    <td class="px-4 py-3 border text-sm">{{ $cat->name_ru }}</td>
                                    <td class="px-4 py-3 border text-sm">{{ $cat->name_en }}</td>
                                    <td class="px-4 py-3 border text-xs">
                                        <span
                                            class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm whitespace-nowrap">
                                            {{ $cat->place }} </span>
                                    </td>
                                    <td class="px-4 py-3 border text-sm">
                                        <a href="{{ route('admin.food-cat.edit', $cat->id) }}" 
                                            class="block transition bg-indigo-400 rounded text-center py-1.5 mb-1 text-white hover:bg-indigo-500">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.food-cat.delete', $cat->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button 
                                                onclick="if(!confirm('წავშალო ეს კატეგორია?')){return false;}"
                                                class="block w-full transition bg-red-400 rounded text-center py-1.5 mb-1 text-white hover:bg-red-500 delete">
                                                Delete
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
