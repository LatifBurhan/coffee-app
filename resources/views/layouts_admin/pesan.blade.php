@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-6">Pesan dari Pelanggan</h1>

<div class="bg-white shadow rounded-lg overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-50">
            <tr>
                <th class="p-4 text-left">Tanggal</th>
                <th class="p-4 text-left">Nama</th>
                <th class="p-4 text-left">Telepon</th>
                <th class="p-4 text-left">Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Pesan as $msg)
            <tr class="border-t">
                <td class="p-4 text-sm">{{ $msg->created_at->format('d M Y, H:i') }}</td>
                <td class="p-4 font-bold">{{ $msg->nama }}</td>
                <td class="p-4">{{ $msg->hp }}</td>
                <td class="p-4 text-gray-600">{{ $msg->pesan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
