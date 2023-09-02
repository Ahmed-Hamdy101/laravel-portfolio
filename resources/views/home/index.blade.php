<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row py-4 ">
            <x-nav-link>
                <a href="https://flowbite.com/" class="flex items-center">
                    <span
                        class="self-center text-xl font-semibold whitespace-nowrap dark:text-white mr-3">Flowbite</span>
                </a>
            </x-nav-link>
            <x-nav-link>
                <a href="https://flowbite.com/" class="flex items-center">
                    <span class="self-center text-base mx-3 whitespace-nowrap dark:text-white mt-1 mr-3">Home</span>
                </a>
            </x-nav-link>
            <x-nav-link>
                <a href="https://flowbite.com/" class="flex ">
                    <span class="self-center text-base whitespace-nowrap dark:text-white mt-1 ml-3">About</span>
                </a>
            </x-nav-link>


                <x-nav-link>
                    <a href="{{ route('login') }}" class="text-md text-gray-700 flex items-center ">Login</a>
                </x-nav-link>
                <x-nav-link>
                    <a href="{{ route('register') }}" class="ml-4 text-md text-gray-700 flex items-center ">Register</a>
                </x-nav-link>
        </div>
    </x-slot>
</x-app-layout>
