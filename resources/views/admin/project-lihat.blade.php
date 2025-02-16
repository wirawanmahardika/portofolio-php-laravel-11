<x-admin-layout>
    <div class="w-full p-5 gap-5 overflow-y-auto flex flex-col">
        <span class="font-bold text-5xl text-center">Projects</span>

        <div class="grid grid-cols-3 gap-3 p-2">
            <span class="col-span-3 font-semibold text-2xl">APIs</span>
            @foreach ($apis as $a)
                <div class="flex flex-col gap-y-2 border-2 border-red-800 rounded px-2 py-3">
                    <span class="font-semibold text-lg text-center">{{ $a->nama }}</span>
                    <a class="mx-auto" href="{{ $a->github }}"><img class="size-7" src="/img/github.png"></a>

                    <div class="flex gap-x-3 justify-center">
                        <a href="/admin/project/edit/{{ $a->id }}"
                            class="px-8 py-1 w-fit rounded font-semibold text-white text-sm bg-sky-600">Edit</a>

                        <form method="POST" action="/admin/project/hapus/{{ $a->id }}">
                            @csrf
                            <button
                                class="px-8 py-1 w-fit rounded font-semibold text-white text-sm bg-red-600">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach

            <span class="col-span-3 font-semibold text-2xl">Web</span>
            @foreach ($projects as $p)
                <div class="border-2 border-black rounded">
                    <img src="{{ $p->imageUrl }}" alt="image">
                    <div class="p-3 bg-white text-black flex flex-col">
                        <h3 class="font-semibold text-center text-lg mb-3">{{ $p->nama }}</h3>

                        <div class="flex gap-x-3 justify-center">
                            <a href="/admin/project/edit/{{ $p->id }}"
                                class="px-8 py-1 rounded font-semibold text-white text-sm bg-sky-600 mb-3 text-center">Edit</a>

                            <form method="POST" action="/admin/project/hapus/{{ $p->id }}">
                                @csrf
                                <button
                                    class="px-8 py-1 rounded font-semibold text-white text-sm bg-red-600 mb-3 text-center">Hapus</button>
                            </form>
                        </div>

                        <p>{{ $p->deskripsi }}</p>
                        @if (isset($p->github) || $p->web)
                            <span class="font-bold -mb-4">View in : </span><br>
                        @endif
                        <div class="flex gap-x-3 w-full">
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
