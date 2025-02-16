<x-admin-layout>
    <div class="w-full p-5 gap-5 overflow-y-auto flex-col flex">
        <span class="font-bold text-5xl text-center">Tambah Blog</span>

        <form id="tambahBlog" class="w-1/2 mx-auto flex flex-col p-5 gap-y-5 ">
            @csrf
            <div class="flex flex-col">
              <span class="text-2xl ">Judul</span>
              <input
                type="text"
                name="judul"
                class="rounded outline-none border-2 border-black h-8"
              />
              {{-- @if ($errors->has("name")) <span class="mt-1 text-red-500 italic text-sm">{{$errors->first('name')}}</span> @endif --}}
            </div>
            <div class="flex flex-col">
              <span class="text-2xl ">Kategori</span>
              <select name="kategori" class="rounded outline-none border-2 border-black form-select text-sm">
                  @foreach ($kategoris as $k)
                      <option value="{{$k->id}}">{{$k->nama}}</option>
                  @endforeach
              </select>
              {{-- @if ($errors->has("image")) <span class="mt-1 text-red-500 italic text-sm">{{$errors->first('image')}}</span> @endif --}}
            </div>

            <div class="flex flex-col">
              <span class="text-2xl ">Jumlah Paragraf</span>
              <div class="flex w-full ">
                  <input
                    type="number"
                    class="rounded outline-none border-2 border-black h-8 border-r-0 rounded-r-none w-5/6"
                  />
                  <div id="setParagraf" class="bg-black rounded-r px-5 text-white w-1/6 cursor-pointer">Apply</div>
              </div>
            </div>

            <div id="paragrafContainer" class="flex flex-col gap-y-5"></div>

            <button class="font-bold px-4 py-1 rounded bg-sky-600 text-stone-200 mx-auto w-fit">
              Tambah
            </button>
          </form>
    </div>
  
    <script src="/js/blog-tambah.js"></script>
  </x-admin-layout>