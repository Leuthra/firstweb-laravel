@extends('layouts.index')
@section('content')

@section('title') {{ 'Home' }} @endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
@endsection

    <div class="text">
        <div class="status">
            <p>
                Romi: <span class="typed-text"></span><span class="cursor typing"></span>
            </p>
        </div>
            <hr />
        <div class="readdocs">
            <p>Read <a href="{{ url('/portfolio') }}" class="docs">Me.</a></p>
        </div>
    </div>

    <div class="bottom">
        <p>
            <div class="phone">
            <i class="icon-whatsapp"></i>
            <p><a href="//wa.me/6289638023602">Rominaru</a></p>
            </div>
        </p>
    </div>

@section('javascript')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection

@stop
