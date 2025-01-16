@extends('layouts.app')

@section('title')
    Liste des monstres
@endsection

@section('content')
    <section class="mb-20">
        <h2 class="text-2xl font-bold mb-4 creepster">
            Liste des monstres
        </h2>
        @include('monsters._index', [
            'monsters' => App\Models\Monster::orderBy('created_at', 'desc')->take(9)->get(),
        ])
    </section>
@endsection
