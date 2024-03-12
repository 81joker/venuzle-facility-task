@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-4">Facilities</h1>
    <div class="mb-4">
        <form action="{{ route('venues.index') }}" method="GET" class="flex items-center space-x-2">
            <input type="text" name="search" placeholder="Search by name..." value="{{ request('search') }}"
                class="p-2 border rounded shadow w-full">
            <button type="submit"
                class="p-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors">Search</button>
        </form>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full table-auto text-left">
            <thead class="bg-green-200">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Name</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($venues as $venue)
                <tr class="{{ $loop->even ? 'bg-green-100' : 'bg-red-100' }} cursor-pointer"
                    onclick="window.location='{{ route('venues.show', $venue->id) }}';">
                    <td class="border px-4 py-2">{{ $venue->id }}</td>
                    <td class="border px-4 py-2">{{ $venue->name }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" class="px-4 py-2">No Venues found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $venues->links() }}
        <!-- Pagination links -->
    </div>
</div>
@endsection