<x-layout>
    <x-slot:title>Blog</x-slot:title>

    <x-navbar />
    <main class="bg-bgBlack min-h-screen py-10 text-white px-6 text-justify md:px-20 w-full">
        <article class="h-full flex flex-col gap-y-10 text-lg">
            <div>
                <h1 class="font-bold text-2xl">{{ $blog->judul }}</h1>
                <span class="text-sm text-gray-300">{{ $blog->kategori->nama }} |
                    {{ $blog->created_at->format('d/m/Y') }}</span>
            </div>

            @foreach ($blog->contents as $c)
                <p class="">{{ $c->text }}</p>
            @endforeach
        </article>



    </main>
</x-layout>
