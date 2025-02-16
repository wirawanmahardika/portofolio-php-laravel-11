<x-layout>
    <x-slot:title>Projects</x-slot:title>

    <x-navbar />
    <main class="bg-bgBlack min-h-screen py-10 text-white px-5 xl:px-20 w-full">
        <h2 class="font-semibold text-3xl text-center">Projects</h2>

        <div class="w-full grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
            <span class="col-span-1 sm:col-span-2 xl:col-span-3 font-semibold text-2xl">APIs</span>

            @foreach ($apis as $a)
                <div class="flex flex-col gap-y-2 border-2 border-red-800 bg-white text-black rounded px-2 py-3">
                    <span class="font-bold text-center">{{ $a->nama }}</span>
                    <a class="mx-auto" href="{{ $a->github }}"><img class="size-7" src="/img/github.png"></a>
                </div>
            @endforeach
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-3 mt-10">
            <span class="col-span-1 md:col-span-3 font-semibold text-2xl">Websites</span>
            @foreach ($projects as $p)
                <div class="border-2 border-slate-500 rounded bg-white">
                    <img src="{{ $p->imageUrl }}" alt="image" class="border-b border-black">
                    <div class="p-3 text-black">
                        <h3 class="font-semibold text-center text-lg mb-3">{{ $p->nama }}</h3>
                        <p class="mb-5">{{ $p->deskripsi }}</p>

                        @if (isset($p->github) || $p->web)
                            <span class="font-bold mt-4">View in : </span><br>
                        @endif

                        <div class="flex gap-x-3 w-full pt-2">
                            @if (isset($p->github))
                                <a href="{{ $p->github }}"><img class="size-7" src="/img/github.png"></a>
                            @endif
                            @if (isset($p->web))
                                <a href="{{ $p->web }}"><img class="size-7" src="/img/internet.png"></a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </main>
</x-layout>
