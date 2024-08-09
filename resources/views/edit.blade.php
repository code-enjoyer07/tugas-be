@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Edit Mobil</h1>
    <form action="{{ route('dashboard.update', $mobil->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-medium">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $mobil->nama }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="merek" class="block text-gray-700 font-medium">Merek</label>
            <input type="text" name="merek" id="merek" value="{{ $mobil->merek }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="type" class="block text-gray-700 font-medium">Type</label>
            <select name="type" id="type" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="matic" {{ $mobil->type == 'matic' ? 'selected' : '' }}>Matic</option>
                <option value="manual" {{ $mobil->type == 'manual' ? 'selected' : '' }}>Manual</option>
                <option value="listrik" {{ $mobil->type == 'listrik' ? 'selected' : '' }}>Listrik</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="cc" class="block text-gray-700 font-medium">CC</label>
            <input type="text" name="cc" id="cc" value="{{ $mobil->cc }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="tahun" class="block text-gray-700 font-medium">Tahun</label>
            <input type="text" name="tahun" id="tahun" value="{{ $mobil->tahun }}" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="decs" class="block text-gray-700 font-medium">Description</label>
            <textarea name="decs" id="decs" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">{{ $mobil->decs }}</textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-medium">Image</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
            @if($mobil->image)
                <img src="{{ asset('storage/' . $mobil->image) }}" alt="{{ $mobil->nama }}" class="mt-2 w-24 h-24 object-cover rounded">
            @endif
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Update Mobil</button>
    </form>
</div>
@endsection

