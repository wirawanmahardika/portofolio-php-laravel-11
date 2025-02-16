<nav id="home"
    class='sticky top-0 bg-black flex justify-between items-center p-3 text-slate-50 border-b-red-500 border-b md:border-none md:p-6 md:px-10 ld:px-14 z-10'>
    <h2 class='text-lg font-bold font-cinzel sm:text-2xl md:text-3xl lg:text-cyan-600 xl:text-amber-600'>
        Wira<span class='text-red-600'>wan</span>
    </h2>
    <ul class='gap-x-5 text-red-600 hidden md:flex md:font-semibold md:items-center'>
        <li class='hover:text-red-800 transition'>
            <a href='/'>Home</a>
        </li>
        <li class='hover:text-red-800 transition'>
            <a href='/project'>Project</a>
        </li>
        <li class='hover:text-red-800 transition'>
            <a href='/blog'>Blog</a>
        </li>
        <li class='hover:bg-red-800 transition bg-red-700 px-3 py-1 rounded text-black'>
            <a href='/contact'>Contact</a>
        </li>
    </ul>
    <svg id="navbar-toggle" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'
        class='w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 md:hidden'>
        <path fillRule='evenodd'
            d='M2.25 4.5A.75.75 0 013 3.75h14.25a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75zm0 4.5A.75.75 0 013 8.25h9.75a.75.75 0 010 1.5H3A.75.75 0 012.25 9zm15-.75A.75.75 0 0118 9v10.19l2.47-2.47a.75.75 0 111.06 1.06l-3.75 3.75a.75.75 0 01-1.06 0l-3.75-3.75a.75.75 0 111.06-1.06l2.47 2.47V9a.75.75 0 01.75-.75zm-15 5.25a.75.75 0 01.75-.75h9.75a.75.75 0 010 1.5H3a.75.75 0 01-.75-.75z'
            clipRule='evenodd' />
    </svg>

    <div id="mobile-nav" style="transition: height ease-out 0.3s"
        class="h-0 md:hidden absolute z-10 top-full left-0 right-0 bg-black overflow-hidden">
        <div class="flex flex-col gap-y-2 p-2">
            <a class="px-2 py-1 rounded ring-blue-400 hover:ring-2" href="/">Home</a>
            <a class="px-2 py-1 rounded ring-blue-400 hover:ring-2" href="/project">Project</a>
            <a class="px-2 py-1 rounded ring-blue-400 hover:ring-2" href="/blog">Blog</a>
            <a class="px-2 py-1 rounded ring-blue-400 hover:ring-2" href="/contact">Contact</a>
        </div>
    </div>
    <span class="hidden h-[140px]"></span>
</nav>
