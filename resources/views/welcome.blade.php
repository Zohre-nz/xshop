@extends('website.inc.website-layout')

@section('title')
    welcome
@endsection
@section('content')
    <main>
    @foreach(getParts($area) as $part)
        @php($p = $part->getBladeWithData())
        @include($p['blade'],['data' => $p['data']])
    @endforeach
    </main>
@endsection
