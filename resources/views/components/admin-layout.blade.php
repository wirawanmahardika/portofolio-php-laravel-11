<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="icon" href="/img/dika.png">

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">


    @vite('resources/css/app.css')
</head>

<body class="font-jost">
    <div class="w-full h-screen flex font-jost overflow-hidden">
        <div class="overflow-hidden bg-stone-900 w-1/6">
            <nav class="w-full flex flex-col text-gray-200">
                <div class="items-center flex justify-center gap-x-3 p-3  bg-black">
                    <span class="font-bold text-gray-200 text-2xl text-center">
                        Admin
                    </span>
                </div>

                <a href="/admin"
                    class="hover:text-sky-600 hover:bg-slate-800 bg-black border-y border-stone-700 p-1 flex justify-between px-2 items-center cursor-pointer">Home</a>
                <a href="/admin/kategori"
                    class="hover:text-sky-600 hover:bg-slate-800 bg-black border-y border-stone-700 p-1 flex justify-between px-2 items-center cursor-pointer">Kategori</a>
                <a href="/admin/about"
                    class="hover:text-sky-600 hover:bg-slate-800 bg-black border-y border-stone-700 p-1 flex justify-between px-2 items-center cursor-pointer">About</a>

                <span
                    class="hover:text-sky-600 hover:bg-slate-800 bg-black border-y border-stone-700 p-1 flex justify-between px-2 items-center cursor-pointer">Blog</span>
                <div class="flex flex-col font-quicksand px-4 overflow-hidden ${height} py-1">
                    <a href="/admin/blog">Lihat</a>
                    <a href="/admin/blog/add">Tambah</a>
                </div>

                <span
                    class="hover:text-sky-600 hover:bg-slate-800 bg-black border-y border-stone-700 p-1 flex justify-between px-2 items-center cursor-pointer">Skills</span>
                <div class="flex flex-col font-quicksand px-4 overflow-hidden ${height} py-1">
                    <a href="/admin/skills">Lihat</a>
                    <a href="/admin/skills/add">Tambah</a>
                    <a href="/admin/skills/edit">Edit</a>
                </div>

                <span
                    class="hover:text-sky-600 hover:bg-slate-800 bg-black border-y border-stone-700 p-1 flex justify-between px-2 items-center cursor-pointer">Projects</span>
                <div class="flex flex-col font-quicksand px-4 overflow-hidden ${height} py-1">
                    <a href="/admin/project">Lihat</a>
                    <a href="/admin/project/add">Tambah</a>
                    <a href="/admin/project/edit">Edit</a>
                </div>
            </nav>
        </div>

        <div class="overflow-y-auto w-5/6">
            <div class="w-full h-[8vh] bg-sky-700 flex p-4 items-center justify-between gap-x-3">
                <div class="gap-x-5 items-center flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <span class="font-bold text-xl text-white">MiniShop</span>
                </div>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="px-8 py-1 rounded text-white bg-black">Logout</button>
                </form>
            </div>

            {{ $slot }}
        </div>
    </div>
</body>

</html>
