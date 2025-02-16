<x-admin-layout>
    <div class="w-full p-5 gap-5 overflow-y-auto">
        <span class="font-bold text-5xl text-center">Blogs</span>

        <table class="text-center w-full mt-4">
            <thead>
                <tr>
                    <th class="border-2 border-black bg-black text-white w-1/12">ID</th>
                    <th class="border-2 border-black bg-black text-white w-1/12">Kategori</th>
                    <th class="border-2 border-black bg-black text-white w-2/12">CreatedAt</th>
                    <th class="border-2 border-black bg-black text-white w-5/12">Judul</th>
                    <th class="border-2 border-black bg-black text-white w-3/12">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $b)
                    <tr>
                        <td class="border-2 border-black">{{ $b->id }}</td>
                        <td class="border-2 border-black">{{ $b->kategori->nama }}</td>
                        <td class="border-2 border-black">{{ $b->created_at->format('d/m/Y') }}</td>
                        <td class="border-2 border-black">
                            <a href="/blog/{{ $b->id }}" class="hover:text-blue-600">{{ $b->judul }}</a>
                        </td>
                        <td class="border-2 border-black space-x-10">
                            <button class="rounded px-3 bg-red-500">Hapus</button>
                            <a href="/admin/blog/edit/{{ $b->id }}" class="rounded px-3 bg-green-500">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-admin-layout>
