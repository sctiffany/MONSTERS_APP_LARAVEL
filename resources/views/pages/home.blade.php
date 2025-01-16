@extends('layouts.app')

@section('title')
    Page d'accueil
@endsection

@section('content')
    @include('monsters._random', ['monster' => \App\Models\Monster::inRandomOrder()->first()])

    @include('monsters._recents', [
        'monsters' => \App\Models\Monster::orderBy('created_at', 'desc')->take(3)->get(),
    ])
@endsection
