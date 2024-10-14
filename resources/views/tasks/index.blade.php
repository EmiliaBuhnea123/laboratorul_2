@extends('layout/app')

@section('title', 'Lista de sarcini')

@section('content')
    <h1 class="text-center text-slate-600 text-4xl">Lista de sarcini</h1>

    @foreach ($tasks as $task)

    {{ $task['id'] }} - {{ $task['title'] }} <br>
        
    @endforeach

    @endsection

