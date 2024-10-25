@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold">Hello, Tailwind!</h1>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Stiri Records</h1>

        <!-- Search Form -->
        <form method="GET" action="{{ route('Stire.index') }}" class="mb-6">
            <div class="grid grid-cols-4 gap-4">
                <input type="text" name="dom_gen" placeholder="Search by dom_gen"
                       value="{{ request()->dom_gen }}" class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500">

                <input type="text" name="denumire" placeholder="Search by denumire"
                       value="{{ request()->denumire }}" class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500">

                <input type="text" name="stire" placeholder="Search by stire"
                       value="{{ request()->stire }}" class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500">

                <input type="text" name="sursa" placeholder="Search by sursa"
                       value="{{ request()->sursa }}" class="px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:ring-blue-500">

                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition duration-200">Search</button>
            </div>
        </form>

        <!-- Results Table -->
        <div class="overflow-x-auto bg-white rounded-lg shadow">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-200 text-gray-600">
                        <th class="px-6 py-3 text-left border border-gray-300">ID</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Created Date</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Hour</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Sursa</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Denumire</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Stire</th>
                        <th class="px-6 py-3 text-left border border-gray-300">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stiri as $stire)
                        <tr class="hover:bg-gray-100 transition duration-200">
                            <td class="px-6 py-4 border border-gray-300">{{ $stire->mv_id }}</td>
                            <td class="px-6 py-4 border border-gray-300">{{ $stire->created_dt }}</td>
                            <td class="px-6 py-4 border border-gray-300">{{ $stire->hour }}</td>
                            <td class="px-6 py-4 border border-gray-300">{{ $stire->sursa }}</td>
                            <td class="px-6 py-4 border border-gray-300">{{ $stire->denumire }}</td>
                            <td class="px-6 py-4 border border-gray-300">{{ Str::limit($stire->stire, 50) }}</td>
                            <td class="px-6 py-4 border border-gray-300">
                                <a href="{{ route('Stire.show', ['id' => $stire->mv_id]) }}" class="text-blue-500 hover:underline">View</a>
                                <a href="{{ route('Stire.edit', $stire->mv_id) }}" class="text-yellow-500 ml-2 hover:underline">Edit</a>
                                <form action="{{ route('Stire.destroy', $stire->mv_id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 ml-2 hover:underline">Delete</button>
                                </form>
                            </td>                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $stiri->links() }}  <!-- Generates the pagination links -->
        </div>
    </div>
@endsection
