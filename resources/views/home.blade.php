
@extends('layouts.main')
@section('title','Movies')

@section('home')


    @forelse ($moviesList as $movie)
<div class="col-3 card personal-card mx-4">
    <li>
        {{$movie->id}} - {{$movie->title}}
    </li>
</div>
    @empty
    <li>
        {{'non c è nulla'}}
    </li>
    @endforelse

@endsection
