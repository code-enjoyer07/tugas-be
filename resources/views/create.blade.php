@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Add Mobil</h1>
    <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div class="mb-4">
            <label for="nama" class="block text-gray-700 font-medium">Nama</label>
            <input type="text" name="nama" id="nama" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="merek" class="block text-gray-700 font-medium">Merek</label>
            <input type="text" name="merek" id="merek" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="type" class="block text-gray-700 font-medium">Type</label>
            <select name="type" id="type" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                <option value="matic">Matic</option>
                <option value="manual">Manual</option>
                <option value="listrik">Listrik</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="cc" class="block text-gray-700 font-medium">CC</label>
            <input type="text" name="cc" id="cc" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="tahun" class="block text-gray-700 font-medium">Tahun</label>
            <input type="text" name="tahun" id="tahun" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <div class="mb-4">
            <label for="decs" class="block text-gray-700 font-medium">Description</label>
            <textarea name="decs" id="decs" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-medium">Image</label>
            <input type="file" name="image" id="image" required class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Add Mobil</button>
    </form>
</div>
@endsection

