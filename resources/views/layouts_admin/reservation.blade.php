@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h3 class="text-gray-700 text-3xl font-medium mb-6">Daftar Reservasi Meja</h3>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Pelanggan</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Jadwal</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $res)
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                            <div class="ml-3">
                                <p class="text-gray-900 font-bold whitespace-no-wrap">{{ $res->name }}</p>
                                <p class="text-gray-600 whitespace-no-wrap">{{ $res->phone }}</p>
                                <p class="text-gray-400 text-xs">{{ $res->guests }} Orang</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap font-bold">{{ date('d M Y', strtotime($res->date)) }}</p>
                        <p class="text-gray-600 whitespace-no-wrap">{{ $res->time }} WIB</p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight
                            {{ $res->status == 'approved' ? 'text-green-900' : ($res->status == 'rejected' ? 'text-red-900' : 'text-orange-900') }}">
                            <span aria-hidden class="absolute inset-0 opacity-50 rounded-full
                                {{ $res->status == 'approved' ? 'bg-green-200' : ($res->status == 'rejected' ? 'bg-red-200' : 'bg-orange-200') }}">
                            </span>
                            <span class="relative capitalize">{{ $res->status }}</span>
                        </span>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">
                        <form action="{{ route('admin.reservations.update', $res->id) }}" method="POST" class="flex justify-center gap-2">
                            @csrf

                            <button type="submit" name="status" value="approved" class="text-green-600 hover:text-green-900 bg-green-100 hover:bg-green-200 p-2 rounded-full transition" title="Terima">
                                <i class="fas fa-check"></i>
                            </button>

                            <button type="submit" name="status" value="rejected" class="text-red-600 hover:text-red-900 bg-red-100 hover:bg-red-200 p-2 rounded-full transition" title="Tolak">
                                <i class="fas fa-times"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
