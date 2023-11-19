<x-guest-layout>
    <nav class="flex flex-row text-white h-20 p-2 ml-14">
        <a href="http://" target="_blank" rel="noopener noreferrer" class="flex flex-row p-4 text-lg">PF</a>
        <ul class="flex flex-row p-4 ml-auto">
            <li> <a href="http://" target="_blank" rel="noopener noreferrer " class="text-xs ml-10">ABOUT</a></li>
            <li> <a href="http://" target="_blank" rel="noopener noreferrer" class="text-xs ml-5">SKILLS</a></li>
            <li> <a href="http://" target="_blank" rel="noopener noreferrer" class="text-xs ml-5">PROJECT</a></li>
            <li> <a href="{{ route('login') }}" target="_blank" rel="noopener noreferrer" class="text-xs ml-5">Sigin</a></li>
        </ul>
    </nav>

    <main class="container ">
        <div class="grid grid-cols-2 gap-6 h-full">
            <div class="hero ml-16 pt-72 text-white" >
                <h1 class="text-5xl "> Lets Build Your Portfolio</h1>
                <p class=" text-justify leading-6 mt-7"> this a fullstack application create portfolio</p>
            <button class=" py-2 px-10 bg-pink-600 text-rose-50 rounded-md mt-2 w-100"> Let's Start </button>
        </div>
        <div class="ml-4 pt-28 text-white">
            <img src="{{ asset("/img/code.svg") }}" alt="">
        </div>
        </div>


        <div class="">
            <h1 class="pt-72 ml-16 text-5xl text-white ">Skills </h1>
            <div class="grid grid-cols-2 gap-6 h-full ml-16 py-12">
                <div class="1"> </div>
                <div class="2">section 2</div>
                <div class="3"> section 3</div>
                <div class="4">section 4</div>
            </div>
       </div>
        </div>

    </main>
</x-guest-layout>
