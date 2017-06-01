@extends('layout.default',['title' => 'Home'])

@section('content')

   {{-- <div class="container">
        @if(Session::has('notification.message'))
            <div class="alert alert-{{session()->get('notification.type')}}">
                {{ Session::get('notification.message') }}
            </div>
        @endif
        @yield('content')
    </div>--}}

    <h1>Laracarte</h1>
@stop