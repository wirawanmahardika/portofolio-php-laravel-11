<x-admin-layout>
    <div class="p-8 w-full flex flex-col gap-y-5 items-center mt-10">
        <span class="font-bold text-4xl ">Edit Category</span>
        <form method="post" action="/admin/kategori/edit" class="w-1/2 flex flex-col items-center gap-y-5">
            @csrf

            <input type="hidden" name="id" value="{{ $id }}">

            <div class="flex flex-col w-full ">
                <label class="text-xl">
                    Nama Category
                </label>
                <input name="nama" value="{{ $nama }}" type="text"
                    class="w-full outline-none border-2 border-black rounded py-1" />
                @if ($errors->has('nama'))
                    <span class="mt-1 text-red-500 italic text-sm">{{ $errors->first('nama') }}</span>
                @endif
            </div>
            <button class="px-8 py-1 rounded bg-sky-600 text-white">Edit</button>
        </form>
    </div>
</x-admin-layout>
