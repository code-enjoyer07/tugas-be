@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6">Mobil Details</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <h5 class="text-xl font-semibold mb-2">{{ $mobil->nama }}</h5>
        <p class="text-gray-700 mb-2"><strong>Merek:</strong> {{ $mobil->merek }}</p>
        <p class="text-gray-700 mb-2"><strong>Type:</strong> {{ $mobil->type }}</p>
        <p class="text-gray-700 mb-2"><strong>CC:</strong> {{ $mobil->cc }}</p>
        <p class="text-gray-700 mb-2"><strong>Tahun:</strong> {{ $mobil->tahun }}</p>
        <p class="text-gray-700 mb-2"><strong>Description:</strong> {{ $mobil->decs }}</p>
        <p class="text-gray-700 mb-4"><strong>Image:</strong></p>
        @if($mobil->image)
            <img src="{{ asset('storage/' . $mobil->image) }}" alt="{{ $mobil->nama }}" class="w-full max-w-md rounded-lg shadow-sm mb-4">
        @endif
        <a href="{{ route('dashboard.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Back to List</a>
    </div>
</div>
@endsection

