@extends('layouts.default.baseof')
@section('main')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @include('layouts.partials.navbar-dashboard')
    
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        @include('layouts.partials.sidebar')

        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-800">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
@endsection
