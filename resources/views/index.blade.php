@extends('layouts.app')
@section('content')
    <div>
{{--        <div id="builds"></div>--}}
        @foreach($builds as $build)
            <div>{{$build->name}}</div>
            <div>{{$build->weapons}}</div>
        @endforeach
    </div>
@endsection

{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Genshin</title>--}}

{{--        @viteReactRefresh--}}
{{--        @vite(['resources/css/app.css', 'resources/js/app.jsx'])--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div id="builds"></div>--}}
{{--    </body>--}}
{{--</html>--}}
