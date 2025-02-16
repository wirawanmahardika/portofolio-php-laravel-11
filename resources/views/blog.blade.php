<x-layout>
    <x-slot:title>Blog</x-slot:title>

    <x-navbar />
    <main class="bg-bgBlack min-h-screen py-10">
        <div
            class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 px-10 xl:px-20 h-fit gap-8 text-white mx-auto xl:gap-x-20">
            <span class="sm:col-span-2 xl:col-span-3 text-3xl text-center font-bold">Blogs</span>

            @foreach ($blogs as $b)
                <div class="rounded border border-white p-5 flex flex-col gap-y-3">
                    <div>
                        <h2 class="text-xl font-bold">{{ $b->judul }}</h2>
                        <span class="font-semibold text-xs text-gray-400">{{ $b->kategori->nama }} |
                            {{ $b->created_at->format('d/m/Y') }}</span>
                    </div>
                    <p class="text-gray-300">{{ Str::limit($b->contents[0]->text, 100) }}</p>
                    <a href="/blog/{{ $b->id }}" class="hover:text-blue-500 text-xs text-gray-300 w-fit">View More
                        >></a>
                </div>
            @endforeach
        </div>
    </main>
</x-layout>
