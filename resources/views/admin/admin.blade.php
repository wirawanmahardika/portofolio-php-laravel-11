<x-admin-layout>
    <main class="p-3 flex flex-col w-full gap-y-8 bg-slate-300 min-h-screen">
        <div class="w-full space-y-5 bg-white p-5 rounded">
            <span class="font-bold text-4xl">Website Content</span>
            <div class="flex justify-between w-full justify-items-center">
                <div
                    class="w-1/5 h-32 rounded p-4 text-slate-200 shadow flex flex-col justify-center gap-y-2 items-center bg-red-600">
                    <span class="font-bold text-xl">{{ $skills }}</span>
                    <span class="font-bold text-xl">Skills</span>
                </div>

                <div
                    class="w-1/5 h-32 rounded p-4 text-slate-200 shadow flex flex-col justify-center gap-y-2 items-center bg-orange-600">
                    <span class="font-bold text-xl">{{ $projects }}</span>
                    <span class="font-bold text-xl">Projects</span>
                </div>

                <div
                    class="w-1/5 h-32 rounded p-4 text-slate-200 shadow flex flex-col justify-center gap-y-2 items-center bg-emerald-600">
                    <span class="font-bold text-xl">{{ $blogs }}</span>
                    <span class="font-bold text-xl">Blogs</span>
                </div>
            </div>
        </div>

    </main>
</x-admin-layout>
