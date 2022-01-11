@extends('layouts.index')   


@section('content')
    <main class="text-center py-20">
        <h1 class="mb-5">Ici se trouve le site WEB</h1>
        <a href="{{ route('admin') }}" class="bg-blue-500 text-white font-bold py-2 px-4 border border-blue-700 rounded">
            Direction Admin
        </a>
    </main>
@endsection