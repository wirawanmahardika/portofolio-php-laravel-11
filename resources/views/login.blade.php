<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="/img/dika.png">
    @vite('resources/css/app.css')
</head>

<body class="flex w-full bg-bgBlack text-white">
    <form action="/login" method="POST"
        class="w-4/5 md:w-3/5 lg:w-2/5 mx-auto min-h-screen font-quicksand flex flex-col items-center gap-y-5">
        <h2 class="font-bold text-3xl mt-20">Login</h2>
        @if ($errors->any())
            <span class="rounded w-full text-center px-5 py-2 bg-red-300 text-slate-700">{{ $errors->first() }}</span>
        @endif


        @csrf
        <div class="flex flex-col gap-y-2 w-full ">
            <label for="username" class="font-semibold">Username</label>
            <input autocomplete="off" type="text" name="username" id="username"
                class="form-input  rounded w-full ring-2 ring-red-600 text-black">
        </div>

        <div class="flex flex-col gap-y-2 w-full ">
            <label for="password" class="font-semibold">Password</label>
            <input autocomplete="off" type="password" name="password" id="password"
                class="form-input  rounded w-full ring-2 ring-red-600 text-black">
        </div>

        <button class="w-fit rounded px-5 py-1 bg-sky-600 font-semibold text-white mt-5">Login</button>
    </form>
</body>

</html>
