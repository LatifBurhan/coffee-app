@extends('layouts.admin')

{{-- Nama section harus 'content' agar sinkron dengan @yield('content') di layout --}}
@section('content')
    @if (session('success'))
        <div
            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6 shadow-sm flex items-center">
            <i class="fas fa-check-circle mr-2"></i>
            {{ session('success') }}
        </div>
    @endif
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Menu Kopi</h1>
        <button onclick="document.getElementById('modalMenu').classList.remove('hidden')"
            class="bg-orange-600 text-white px-4 py-2 rounded">
            <i class="fas fa-plus mr-2"></i>Tambah Menu
        </button>
    </div>

    <div class="bg-white shadow rounded-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50 text-gray-600 uppercase text-sm">
                <tr>
                    <th class="p-4 text-left">Gambar</th>
                    <th class="p-4 text-left">Nama</th>
                    <th class="p-4 text-left">Harga</th>
                    <th class="p-4 text-center">Aksi</th> {{-- Ditambah center --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="p-4">
                            <img src="/images/{{ $menu->gambar }}" width="60" height="60"
                                class="rounded object-cover border">
                        </td>
                        <td class="p-4 font-bold text-gray-800">{{ $menu->nama_menu }}</td>
                        <td class="p-4 text-orange-600 font-semibold">Rp {{ number_format($menu->harga, 0, ',', '.') }}</td>
                        <td class="p-4">
                            <div class="flex justify-center space-x-3">
                                {{-- Tombol Edit (Tujuan route bisa ditambah nanti) --}}
                                <button onclick="openEditModal({{ $menu }})"
                                    class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i>
                                </button>

                                {{-- Form Aksi Delete --}}
                                <form action="{{ route('menu.destroy', $menu->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus menu ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- MODAL TAMBAH MENU TETAP DI SINI --}}
    <div id="modalMenu" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-lg w-96 shadow-xl">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Tambah Menu Baru</h2>
            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="block text-sm font-medium">Nama Menu</label>
                    <input type="text" name="nama_menu" class="w-full border p-2 rounded focus:ring-orange-500" required>
                </div>
                <div class="mb-3">
                    <label class="block text-sm font-medium">Deskripsi</label>
                    <textarea name="deskripsi" class="w-full border p-2 rounded" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label class="block text-sm font-medium">Harga</label>
                    <input type="number" name="harga" class="w-full border p-2 rounded" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium">Gambar</label>
                    <input type="file" name="gambar" class="w-full border p-2 rounded text-sm">
                </div>
                <div class="flex justify-end gap-2">
                    <button type="button" onclick="document.getElementById('modalMenu').classList.add('hidden')"
                        class="px-4 py-2 text-gray-500 hover:bg-gray-100 rounded">Batal</button>
                    <button type="submit"
                        class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700 transition">Simpan
                        Menu</button>
                </div>
            </form>
        </div>
    </div>
{{-- MODAL EDIT --}}
    <div id="modalEdit" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg w-96 shadow-xl">
        <h2 class="text-xl font-bold mb-4 text-gray-800">Edit Menu</h2>
        <form id="editForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- PENTING untuk update --}}

            <div class="mb-3">
                <label class="block text-sm font-medium">Nama Menu</label>
                <input type="text" name="nama_menu" id="edit_nama" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-3">
                <label class="block text-sm font-medium">Deskripsi</label>
                <textarea name="deskripsi" id="edit_deskripsi" class="w-full border p-2 rounded" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label class="block text-sm font-medium">Harga</label>
                <input type="number" name="harga" id="edit_harga" class="w-full border p-2 rounded" required>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Gambar (Kosongkan jika tidak diganti)</label>
                <input type="file" name="gambar" class="w-full border p-2 rounded text-sm">
            </div>
            <div class="flex justify-end gap-2">
                <button type="button" onclick="document.getElementById('modalEdit').classList.add('hidden')" class="px-4 py-2 text-gray-500">Batal</button>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Update Menu</button>
            </div>
        </form>
    </div>
</div>
@endsection
