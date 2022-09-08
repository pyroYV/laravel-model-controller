@extends('layouts.main')

@section('title','Movies')

@section('home')

@forelse ($moviesList as $movie)
    <li>
        {{$movie->id}} - {{$movie->title}}
    </li>
@empty

@endforelse
