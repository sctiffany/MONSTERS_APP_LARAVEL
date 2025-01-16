@extends('layouts.app')

@section('title')
    Page d'accueil
@endsection

@section('content')
    @include('monsters._random', ['monster' => \App\Models\Monster::inRandomOrder()->first()])
@endsection
