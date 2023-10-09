@extends('layout')


@section('theme')

@include('partials._hero')
@include('partials._search')
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@if(count($listings) == 0)
{{'No job in a list'}}
@endif


@foreach($listings as $l)
    <x-list-card :l="$l" />
@endforeach

</div>
<div class="mt-6 p-4">
    {{$listings->links()}}
</div>
@endsection