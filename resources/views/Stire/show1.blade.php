@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4">Stire Details</h2>

        <div class="mb-4">
            <label class="block text-gray-700">ID:</label>
            <p class="border border-gray-300 p-2 rounded">{{ $stire->mv_id }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Created Date:</label>
            <p class="border border-gray-300 p-2 rounded">{{ $stire->created_dt }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Hour:</label>
            <p class="border border-gray-300 p-2 rounded">{{ $stire->hour }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Sursa:</label>
            <p class="border border-gray-300 p-2 rounded">{{ $stire->sursa }}</p>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Stire:</label>
            <p class="border border-gray-300 p-2 rounded">{{ $stire->stire }}</p>
        </div>

        <div class="mt-4">
            <a href="{{ route('Stire.index') }}" class="px-4 py-2 bg-blue-500 text-white rounded">Back to List</a>
        </div>
    </div>
@endsection
