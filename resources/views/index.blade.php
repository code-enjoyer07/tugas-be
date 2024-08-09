
@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-4">Mobil List</h1>
    <a href="{{ route('dashboard.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Mobil</a>

    @if ($message = Session::get('success'))
        <div class="bg-green-500 text-white px-4 py-2 rounded mt-4">
            {{ $message }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-200 mt-4 rounded-lg shadow-md">
        <thead class="bg-gray-100 border-b border-gray-200">
            <tr>
                <th class="py-2 px-4 text-left text-gray-700">ID</th>
                <th class="py-2 px-4 text-left text-gray-700">Nama</th>
                <th class="py-2 px-4 text-left text-gray-700">Merek</th>
                <th class="py-2 px-4 text-left text-gray-700">Type</th>
                <th class="py-2 px-4 text-left text-gray-700">CC</th>
                <th class="py-2 px-4 text-left text-gray-700">Tahun</th>
                <th class="py-2 px-4 text-left text-gray-700">Image</th>
                <th class="py-2 px-4 text-left text-gray-700">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobils as $mobil)
                <tr class="border-b border-gray-200">
                    <td class="py-2 px-4">{{ $mobil->id }}</td>
                    <td class="py-2 px-4">{{ $mobil->nama }}</td>
                    <td class="py-2 px-4">{{ $mobil->merek }}</td>
                    <td class="py-2 px-4">{{ $mobil->type }}</td>
                    <td class="py-2 px-4">{{ $mobil->cc }}</td>
                    <td class="py-2 px-4">{{ $mobil->tahun }}</td>
                    <td class="py-2 px-4">
                        <img src="{{ asset('storage/' . $mobil->image) }}" alt="{{ $mobil->nama }}" class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="py-2 px-4">
                        <a href="{{ route('dashboard.show', $mobil->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">View</a>
                        <a href="{{ route('dashboard.edit', $mobil->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('dashboard.destroy', $mobil->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

