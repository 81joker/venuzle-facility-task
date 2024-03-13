@extends('layouts.app')

@section('content')
<div
    class="relative min-h-screen bg-gray-100 bg-center sm:flex sm:justify-center sm:items-center bg-dots dark:bg-gray-900 selection:bg-indigo-500 selection:text-white">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex flex-col justify-center items-center">
                <h1 class="font-light text-8xl">MyFacilites</h1>
                <div class="mt-8">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ route('facilities.index') }}"
                        class="px-4 py-2 bg-teal-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-700 focus:bg-teal-700 active:bg-teal-800 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition ease-in-out duration-150">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}"
                        class="px-4 py-2 bg-teal-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-teal-700 focus:bg-teal-700 active:bg-teal-800 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 transition ease-in-out duration-150">Log
                        In</a>
                    @endauth
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection