@extends('layouts.back')

@section('content')
    <h1 class="text-2xl p-5">Page admin / membre - create</h1>
    <a href="{{ route('admin') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-5">Retour</a>
    @dump(Session::all())
    {{-- @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    @include('components.form-create')
@endsection