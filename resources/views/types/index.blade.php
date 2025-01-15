@extends('layouts.app')

@section('content')
    <h2>Liste des types</h2>
    <ul>
        @foreach ($types as $type)
            <li>
                <a href="">{{ $type->name }}</a>
            </li>
        @endforeach
    </ul>
@endsection
