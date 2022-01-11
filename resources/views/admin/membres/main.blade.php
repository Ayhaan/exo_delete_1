@extends('layouts.back')

@section('content')
    <h1 class="text-2xl p-5">Page admin / membre</h1>
    <a href="{{ route('membre.create') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-5">Create</a>
    @include('components.table-membre')
@endsection