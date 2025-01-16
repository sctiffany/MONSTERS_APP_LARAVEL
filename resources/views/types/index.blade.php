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

    <h2>Liste des monstres</h2>
    <ul>
        @foreach ($types as $type)
            <li>
                <strong>{{ $type->name }}</strong> <!-- Affiche le nom du type -->
                <ul>
                    @foreach ($type->monsters as $monster)
                        <li>
                            <a href="">{{ $monster->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
