@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-semibold mb-4">Facility Details</h1>
    <div class="bg-white p-6 rounded shadow">
        <p><strong>ID:</strong> {{ $facility->id }}</p>
        <p><strong>Name:</strong> {{ $facility->name }}</p>
        <!-- Add more facility properties here -->
    </div>
</div>
@endsection
