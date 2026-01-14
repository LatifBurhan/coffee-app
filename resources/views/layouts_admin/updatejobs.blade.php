@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h3 class="text-gray-700 text-3xl font-medium">Edit Lowongan Kerja</h3>

    <div class="mt-8">
        <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT') <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Posisi Pekerjaan</label>
                <input type="text" name="title" value="{{ $job->title }}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500" required>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Tipe</label>
                <select name="type" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                    <option value="Full Time" {{ $job->type == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                    <option value="Part Time" {{ $job->type == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                    <option value="Internship" {{ $job->type == 'Internship' ? 'selected' : '' }}>Internship</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Deskripsi & Kualifikasi</label>
                <textarea name="description" rows="5" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500" required>{{ $job->description }}</textarea>
            </div>

            <div class="mb-6 flex items-center">
                <input type="checkbox" name="is_active" id="is_active" value="1" {{ $job->is_active ? 'checked' : '' }} class="w-4 h-4 text-orange-600 border-gray-300 rounded focus:ring-orange-500">
                <label for="is_active" class="ml-2 block text-sm text-gray-900">
                    Lowongan Aktif (Tampilkan di Website)
                </label>
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('admin.jobs.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">Batal</a>
                <button type="submit" class="px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700 transition">Update Lowongan</button>
            </div>
        </form>
    </div>
</div>
@endsection
