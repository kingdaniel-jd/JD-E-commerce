<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-neutral-700 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex space-x-5">
                    
                    <div id="item-card" class="w-44 h-64">
                        <div class="bg-white w-44 h-44 flex justify-center items-center rounded-md">
                            <img src="{{ asset('img/G-Pro X White.webp') }}" alt="G-Pro X White" class=" w-40 h-40 object-cover">
                        </div>
                        <div class="absolute">
                            <p class=" bg-white text-black px-2 py-1 text-xs rotate-[270deg] w-fit h-fit mt-10 -ml-[1.35rem]">Pro Series</p>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <h1 class=" font-bold text-lg mt-3">Pro X White</h1>
                        </div>
                    </div>

                    <div id="item-card" class="w-44 h-64">
                        <div class="bg-white w-44 h-44 flex justify-center items-center rounded-md">
                            <img src="{{ asset('img/G-Pro X Black1.webp') }}" alt="G-Pro X Black" class="object-cover">
                        </div>
                        <div class="absolute">
                            <p class=" bg-white text-black px-2 py-1 text-xs rotate-[270deg] w-fit h-fit mt-10 -ml-[1.35rem]">Pro Series</p>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <h1 class=" font-bold text-lg mt-3">Pro X Black</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
