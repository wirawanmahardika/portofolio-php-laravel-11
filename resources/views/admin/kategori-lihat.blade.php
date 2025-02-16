<x-admin-layout>
    <div class="w-full p-5 flex flex-col gap-5 overflow-y-auto ">
        <span class="col-span-3 font-bold text-5xl">Categories</span>

        <form method="post" action="/admin/kategori/tambah" class="w-1/2 mx-auto flex flex-col p-5 gap-y-5 ">
          @csrf
          <span class="font-semibold text-3xl text-center">Tambah Category</span>
          <div class="flex flex-col">
            <span class="text-2xl ">Nama</span>
            <input
              type="text"
              name="nama"
              class="rounded outline-none border-2 border-black h-8"
              value="{{old('name')}}"
              />
              @if ($errors->has("name")) <span class="mt-1 text-red-500 italic text-sm">{{$errors->first('name')}}</span> @endif
            </div>
          <button type="submit" class="font-bold px-4 py-1 rounded bg-sky-600 text-stone-200 mx-auto w-fit">
            Tambah
          </button>
        </form>

        <hr class="h-1 bg-black">

        <span class="-mb-2 font-semibold text-3xl">List Kategori</span>
        <table class="text-center">
          <thead>
            <tr>
              <th class="border-2 border-black bg-black text-white w-1/6">ID</th>
              <th class="border-2 border-black bg-black text-white w-3/6">Nama</th>
              <th class="border-2 border-black bg-black text-white w-2/6">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kategoris as $k)
              <tr>
                <td class="border-2 border-black">{{$k->id}}</td>
                <td class="border-2 border-black">{{$k->nama}}</td>
                <td class="border-2 border-black space-x-10">
                  <button class="rounded px-3 bg-red-500">Hapus</button>
                  <a href="/admin/kategori/edit/{{$k->id}}" class="rounded px-3 bg-green-500">Edit</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
    </div>
</x-admin-layout>