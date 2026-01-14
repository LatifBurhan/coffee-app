@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-8">

    <h3 class="text-gray-700 text-3xl font-medium mb-6">Data Pelamar Kerja</h3>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Pelamar</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Posisi</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Kontak</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">CV</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Status Saat Ini</th>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Ubah Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        @forelse($applications as $app)
                        <tr>
                            <td class="px-6 py-4 border-b border-gray-200">
                                <div class="text-sm leading-5 font-bold text-gray-900">{{ $app->name }}</div>
                                <div class="text-xs leading-5 text-gray-500">{{ $app->created_at->format('d M Y, H:i') }}</div>
                            </td>

                            <td class="px-6 py-4 border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900">{{ $app->job->title ?? 'Posisi Dihapus' }}</div>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-orange-100 text-orange-800">
                                    {{ $app->job->type ?? '-' }}
                                </span>
                            </td>

                            <td class="px-6 py-4 border-b border-gray-200 text-sm">
                                <div class="text-gray-900"><i class="fas fa-envelope mr-1 text-gray-400"></i> {{ $app->email }}</div>
                                <div class="text-gray-600 mt-1"><i class="fas fa-phone mr-1 text-gray-400"></i> {{ $app->phone }}</div>
                            </td>

                            <td class="px-6 py-4 border-b border-gray-200 text-center">
                                <a href="{{ Storage::url($app->cv_path) }}" target="_blank" class="text-blue-600 hover:text-blue-900 underline text-sm font-medium">
                                    <i class="fas fa-file-pdf mr-1"></i> Lihat CV
                                </a>
                            </td>

                            <td class="px-6 py-4 border-b border-gray-200 text-center">
                                @php
                                    $statusColor = 'bg-gray-100 text-gray-800'; // Default pending/review cv
                                    if($app->status == 'wawancara') $statusColor = 'bg-blue-100 text-blue-800';
                                    if($app->status == 'fgd') $statusColor = 'bg-purple-100 text-purple-800';
                                    if($app->status == 'diterima') $statusColor = 'bg-green-100 text-green-800';
                                    if($app->status == 'ditolak') $statusColor = 'bg-red-100 text-red-800';
                                @endphp
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full {{ $statusColor }} uppercase">
                                    {{ $app->status }}
                                </span>
                            </td>

                            <td class="px-6 py-4 border-b border-gray-200 text-center">
                                <form action="{{ route('admin.applications.updateStatus', $app->id) }}" method="POST" class="flex items-center justify-center gap-2">
                                    @csrf

                                    <select name="status" class="block w-32 px-2 py-1 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-orange-500 focus:border-orange-500">
                                        <option value="review cv" {{ $app->status == 'review cv' ? 'selected' : '' }}>Review CV</option>
                                        <option value="wawancara" {{ $app->status == 'wawancara' ? 'selected' : '' }}>Wawancara</option>
                                        <option value="fgd" {{ $app->status == 'fgd' ? 'selected' : '' }}>FGD</option>
                                        <option value="diterima" {{ $app->status == 'diterima' ? 'selected' : '' }}>Diterima</option>
                                        <option value="ditolak" {{ $app->status == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                    </select>

                                    <button type="submit" class="p-2 bg-orange-600 text-white rounded-md hover:bg-orange-700 transition" title="Simpan Status">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                Belum ada pelamar yang masuk.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
