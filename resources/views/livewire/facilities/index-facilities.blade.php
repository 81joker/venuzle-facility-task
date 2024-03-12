@extends('layouts.app')

@section('content')

<div class="container m-auto mt-20">
<h1 class="text-2xl font-semibold mb-4">All Facilities</h1>
      <div class="overflow-x-auto">
            <table class="w-full table-auto text-left">
                <thead class="bg-green-200">
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($facilities as $facility)
                    <tr class="{{ $loop->even ? 'bg-green-100' : 'bg-red-100' }} cursor-pointer"
                              
                        onclick="window.location='{{ route('facilities.show', $facility) }}';">
                        <td class="border px-4 py-2">{{ $facility->id }}</td>
                        <td class="border px-4 py-2">{{ $facility->name }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="2" class="px-4 py-2">No facilities found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>  

            {{ $facilities->links() }}   
    </div>
@endsection