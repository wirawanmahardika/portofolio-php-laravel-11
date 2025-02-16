<x-admin-layout>
    <div class="w-full p-5 grid grid-cols-3 gap-5 overflow-y-auto ">
        <span class="col-span-3 font-bold text-5xl text-center">Skills</span>

        @foreach ($skills as $s)
            <div
                class="hover:bg-slate-600 p-5 flex flex-col gap-y-5 items-center border-2 border-black rounded-lg shadow-lg h-full justify-end">
                <img class="w-2/3" src="{{ $s->imageUrl }}" alt={{ $s->name }} />
                <span class="font-bold text-4xl self-center text-center">{{ $s->name }}</span>
                <span class="font-bold text-lg">ID : {{ $s->id }}</span>
            </div>
        @endforeach
    </div>

</x-admin-layout>
