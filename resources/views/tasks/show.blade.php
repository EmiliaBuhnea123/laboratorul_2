@extends('layout.app')

@section('title', 'Detalii despre sarcini')

@section('content')
    <h1 class="text-center text-cyan-600 text-4xl">Sarcina {{ $task['id'] }}</h1>

    <div class="task">
    <h2 class=" text-slate-600 text-2xl">{{ $task['title'] }}</h2>
    <p>{{ $task['description'] }}</p>
    </div>

    <x-task 
    title="Pagina de contacte" 
    description="De scris codul în Laravel pentru a crea pagina de contacte!" 
    created="2024-10-14" 
    updated="2024-10-14" 
    task="Edit/Delete" 
    status="finalizat" 
    priority="scazuta" 
    assigned="Emilia" />

    @endsection





   