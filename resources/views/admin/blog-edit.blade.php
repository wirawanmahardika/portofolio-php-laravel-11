<x-admin-layout>
    <div class="w-full p-5 gap-5 overflow-y-auto flex-col flex">
        <span class="font-bold text-5xl text-center">Edit Blog</span>

        <form id="editBlog" class="w-1/2 mx-auto flex flex-col p-5 gap-y-5 ">
          <input type="hidden" name="id" value="{{$blog->id}}" />
            @csrf

            <div class="flex flex-col">
              <span class="text-2xl ">Judul</span>
              <input
                type="text"
                name="judul"
                value="{{$blog->judul}}"
                class="rounded outline-none border-2 border-black h-8"
                required
              />
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
              Edit
            </button>
          </form>
    </div>
  
    <script src="/js/blog-edit.js"></script>
  </x-admin-layout>