<x-layout>
    <x-slot:title>Home</x-slot:title>

    <x-navbar />
    <div class="bg-bgBlack min-h-screen font-quicksand text-gray-200 overflow-hidden">
        <div class="flex flex-col">
            <div class="h-[90vh] md:h-fit lg:h-[87vh] md:py-10 lg:py-0 w-full bg-black">
                <div class='flex flex-col justify-center h-full lg:h-fit lg:flex-row lg:mt-10 lg:px-10'>
                    <div
                        class="w-2/3 mx-auto rounded-full bg-red-600 overflow-hidden shadow-sm shadow-slate-500 mt-3 sm:w-2/5 md:w-2/5 lg:order-2 lg:w-[60%]">
                        <img src="/img/dika.png" alt="dika" class="w-5/6 lg:w-3/4 mx-auto" />
                    </div>

                    <div class="flex flex-col items-center p-5 lg:items-start lg:order-1 lg:justify-center w-full">
                        <p class="font-medium sm:text-xl md:text-2xl mb-1">
                            <span class="text-red-600 font-quicksand">Hello</span> my name is
                        </p>
                        <h1 class="font-bold text-center text-2xl font-josefin-sans sm:text-4xl md:text-5xl -mb-1">
                            Wirawan Mahar<span class="text-red-600">dika</span>
                        </h1>
                        <p class="sm:text-xl md:text-2xl">
                            I am a <span id="profession" class="text-red-600 font-quicksand"></span>
                        </p>

                        <a href="/contact" id="jumbotron-contact"
                            class="rounded-full transition-colors hover:bg-red-900 px-3 py-1 font-semibold text-sm md:text-base md:py-2 md:px-4 mt-4 w-fit bg-red-500 ">Contact
                            Me</a>
                    </div>
                </div>
            </div>



            {{-- skills --}}
            <div class="w-full flex gap-y-8 items-center flex-col p-5 min-h-screen py-20 mt-7">
                <h3 class="font-bold text-4xl uppercase">Experience</h3>
                <div class="w-full md:w-4/5 lg:w-2/3">
                    <h2 class="font-semibold text-lg">Backend Developer</h2>
                    <div class="w-full rounded-full border overflow-hidden">
                        <div id="backend-bar" class="w-0 h-6 pl-5 bg-gradient-to-r from-red-900 to-red-600">90%
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-4/5 lg:w-2/3">
                    <h2 class="font-semibold text-lg">Frontend Developer</h2>
                    <div class="w-full rounded-full border overflow-hidden">
                        <div id="frontend-bar" class="w-0 h-6 pl-5 bg-gradient-to-r from-red-900 to-red-600">80%
                        </div>
                    </div>
                </div>

                <div
                    class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 justify-items-start gap-5 mt-20">
                    <span class="col-span-2 sm:col-span-3 md:col-span-4 lg:col-span-5 font-bold text-xl mx-auto">Used
                        Technologies</span>
                    @foreach ($skills as $s)
                        <div
                            class="tech || text-center sm:text-xl bg-zinc-900 shadow-lg shadow-slate-900 rounded p-5 opacity-0">
                            <img src="{{ $s->imageUrl }}" alt="{{ $s['name'] }}" class="mx-auto w-1/2" />
                            <p class="text-sm sm:text-base">{{ $s['name'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>


            {{-- about --}}
            <div id="about">
                <div class="hidden md:grid grid-cols-3 p-5 gap-3 pb-0">
                    <img src="/img/about.png" alt="my picture" class="h-full" />
                    <div class="col-span-2 h-full flex items-center flex-col justify-center gap-y-4">
                        <h2 class="mx-auto text-4xl font-bold mt-14">
                            About Me
                        </h2>
                        <p class="mt-20 sm:mt-10 text-justify leading-8">{{ $about }}</p>
                    </div>
                </div>

                <div style="background-image: url('/img/about.png')"
                    class="p-5 flex flex-col items-center gap-y-4 min-h-screen bg-bottom bg-origin-content bg-no-repeat bg-fixed bg-contain sm:text-lg md:hidden">
                    <h2 class="mx-auto text-4xl font-bold">
                        About Me
                    </h2>
                    <p class="mt-20 sm:mt-10 text-justify">
                        {{ $about }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/animation/home.js"></script>
</x-layout>
