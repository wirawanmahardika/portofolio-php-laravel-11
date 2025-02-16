<x-admin-layout>
    <form method="post" enctype="multipart/form-data" action="/admin/project/add"
        class="w-1/2 mx-auto flex flex-col p-5 gap-y-5 ">
        @csrf
        <span class="font-bold text-4xl text-center">Tambah Project</span>
        <div class="flex flex-col">
            <span class="text-2xl ">Nama</span>
            <input type="text" name="nama" class="rounded outline-none border-2 border-black h-8"
                value="{{ old('nama') }}" />
            @if ($errors->has('nama'))
                <span class="mt-1 text-red-500 italic text-sm">{{ $errors->first('nama') }}</span>
            @endif
        </div>


        <div class="flex flex-col">
            <span class="text-2xl mb-4">Project API ?</span>

            <div class="flex gap-x-3 text-lg">
                <div class="space-x-2">
                    <label for="ya">Ya</label>
                    <input type="radio" id="ya" name="is_api" value="true">
                </div>
                <div class="space-x-2">
                    <label for="tidak">Tidak</label>
                    <input type="radio" id="tidak" name="is_api" value="false">
                </div>
            </div>

            @if ($errors->has('is_api'))
                <span class="mt-1 text-red-500 italic text-sm">{{ $errors->first('is_api') }}</span>
            @endif
        </div>

        <div class="flex flex-col">
            <span class="text-2xl ">Github</span>
            <input type="text" name="github" class="rounded outline-none border-2 border-black h-8"
                value="{{ old('github') }}" />
            @if ($errors->has('github'))
                <span class="mt-1 text-red-500 italic text-sm">{{ $errors->first('github') }}</span>
            @endif
        </div>

        <div class="flex flex-col">
            <span class="text-2xl ">Web</span>
            <input type="text" name="web" class="rounded outline-none border-2 border-black h-8"
                value="{{ old('web') }}" />
            @if ($errors->has('web'))
                <span class="mt-1 text-red-500 italic text-sm">{{ $errors->first('web') }}</span>
            @endif
        </div>

        <div class="flex flex-col">
            <span class="text-2xl ">Photo</span>
            <input name="image" value="{{ old('image') }}" type="file"
                class="rounded outline-none border-2 border-black h-8" />
            @if ($errors->has('image'))
                <span class="mt-1 text-red-500 italic text-sm">{{ $errors->first('image') }}</span>
            @endif
        </div>

        <div class="flex flex-col">
            <span class="text-2xl ">Deskripsi</span>
            <textarea name="deskripsi" value="{{ old('deskripsi') }}" class="rounded outline-none border-2 border-black"
                rows="3"></textarea>

            @if ($errors->has('deskripsi'))
                <span class="mt-1 text-red-500 italic text-sm">{{ $errors->first('deskripsi') }}</span>
            @endif
        </div>


        <button class="font-bold px-4 py-1 rounded bg-sky-600 text-stone-200 mx-auto w-fit">
            Tambah
        </button>
    </form>
</x-admin-layout>
