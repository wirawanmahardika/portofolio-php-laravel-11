<x-admin-layout>
    <div class="p-8 w-full flex flex-col gap-y-5 items-center">
        <span class="font-bold text-4xl ">Edit Project</span>
        <form method="post" enctype="multipart/form-data" action="/admin/project/edit"
            class="w-1/2 mx-auto flex flex-col p-5 gap-y-5 ">
            @csrf
            <div class="flex flex-col">
                <span class="text-2xl ">ID Project</span>
                <input type="text" name="id" class="rounded outline-none border-2 border-black h-8"
                    value="{{ old('id') }}" />
                @if ($errors->has('id'))
                    <span class="mt-1 text-red-500 italic text-sm">{{ $errors->first('id') }}</span>
                @endif
            </div>
            <div class="flex flex-col">
                <span class="text-2xl ">Nama</span>
                <input type="text" name="nama" class="rounded outline-none border-2 border-black h-8"
                    value="{{ old('nama') }}" />
                @if ($errors->has('nama'))
                    <span class="mt-1 text-red-500 italic text-sm">{{ $errors->first('nama') }}</span>
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
                Edit
            </button>
        </form>
    </div>

</x-admin-layout>
