@extends('layouts.app')

@section('title')
    Fiche de {{ $monster->name }}
@endsection

@section('content')
    @include('monsters._singleCard')

    @include('monsters._ratings')

    @include('monsters._comments')
@endsection
