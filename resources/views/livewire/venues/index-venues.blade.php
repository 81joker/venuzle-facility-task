<div>

    <div class="container m-auto mt-20">
        <h1 class="text-2xl font-semibold mb-4">All Vemues</h1>
        <livewire:search-venue />
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
                        onclick="window.location='{{ route('venue.show', $venue) }}';">
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
    
        {{ $venues->links() }}
    </div>
</div>
