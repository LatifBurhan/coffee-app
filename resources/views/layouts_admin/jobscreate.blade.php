@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-8">

    <h3 class="text-gray-700 text-3xl font-medium mb-6">Tambah Lowongan Baru</h3>

    <div class="mt-4">
        <div class="p-6 bg-white rounded-md shadow-md">
            <h2 class="text-lg text-gray-700 font-semibold border-b pb-4 mb-6">Formulir Lowongan</h2>

            <form action="{{ route('admin.jobs.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="text-gray-700 font-bold mb-2 block">Posisi / Judul Pekerjaan</label>
                    <input type="text" name="title" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500" placeholder="Contoh: Senior Barista" required>
                </div>

                <div class="mb-4">
                    <label class="text-gray-700 font-bold mb-2 block">Tipe Pekerjaan</label>
                    <select name="type" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500 bg-white">
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Internship">Internship (Magang)</option>
                        <option value="Freelance">Freelance</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="text-gray-700 font-bold mb-2 block">Deskripsi Pekerjaan</label>
                    <textarea name="description" rows="5" class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:border-orange-500 focus:ring-1 focus:ring-orange-500" placeholder="Tulis kualifikasi dan deskripsi pekerjaan disini..." required></textarea>
                </div>

                <div class="flex justify-end mt-6 gap-3">
                    <a href="{{ route('admin.jobs.index') }}" class="px-6 py-2 leading-5 text-gray-700 transition-colors duration-200 transform bg-gray-200 rounded-md hover:bg-gray-300 focus:outline-none focus:bg-gray-300">
                        Batal
                    </a>
                    <button type="submit" class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-orange-600 rounded-md hover:bg-orange-700 focus:outline-none focus:bg-orange-700">
                        Simpan Data
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
