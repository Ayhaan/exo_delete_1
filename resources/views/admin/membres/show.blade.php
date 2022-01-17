@extends('layouts.back')

@section('content')
<h1 class="text-2xl p-5">SHOW | {{ $membre->nom }}</h1>

    <p>Nbr : {{ $membre->id }} </p>
    <p>Nom : {{ $membre->nom }} </p>
    <p>age : {{ $membre->age }} </p>
    <p>Genre : {{ $membre->genre }} </p>
@endsection
