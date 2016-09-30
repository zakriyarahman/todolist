@extends('master')
@section('content')
	<div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            @yield('navigationbar')
        @endif

        @yield('comingsoon')
    </div>
@endsection