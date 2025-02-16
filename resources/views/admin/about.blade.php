<x-admin-layout>
    <h2 class="font-bold text-3xl text-center mt-4">About</h2>
    
    <main  class="p-6">
        <span class="font-bold text-xl mb-2">Text About Saat Ini : </span>
        <p>{{$text}}</p>

        <form action="/admin/about" method="POST" class="w-full mt-8 flex flex-col gap-y-2 ">
            @csrf
            <span class="mx-auto font-bold text-3xl ">Edit About</span>

            <textarea name="text" class="border-2 border-black" cols="30" rows="10"></textarea>
            <button class="px-10  py-1 font-semibold rounded bg-sky-600 mx-auto w-fit">Edit</button>
        </form>
    </main>

</x-admin-layout>