<x-admin-layout>
    <div class="w-full p-5 gap-5 overflow-y-auto flex flex-col">
        <span class="font-bold text-5xl text-center">Projects</span>

        <div class="grid grid-cols-3 gap-3 p-2">
            <span class="col-span-3 font-semibold text-2xl">APIs</span>
            @foreach ($apis as $a)
                <div class="flex flex-col gap-y-2 border-2 border-red-800 rounded px-2 py-3">
                    <span class="font-semibold text-lg text-center">({{ $a->id }}) {{ $a->nama }}</span>
                    <a class="mx-auto" href="{{ $a->github }}"><img class="size-7" src="/img/github.png"></a>
                </div>
            @endforeach

            <span class="col-span-3 font-semibold text-2xl">Web</span>
            @foreach ($projects as $p)
                <div class="border-2 border-black rounded">
                    <img src="{{ $p->imageUrl }}" alt="image">
                    <div class="p-3 bg-white text-black">
                        <h3 class="font-semibold text-center text-lg mb-3">({{ $p->id }}) {{ $p->nama }}
                        </h3>
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
    </div>

</x-admin-layout>
