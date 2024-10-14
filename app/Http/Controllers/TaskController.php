<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
{
    $tasks = [
       ['id'=> 1, 'title' => 'Prima sarcina'],
       ['id'=> 2, 'title' => 'A doua sarcina'],
       ['id'=> 3, 'title' => 'A treia sarcina'],
];
   return view('tasks.index', ['tasks'=>$tasks]);
}


public function create()
{
    return 'Acesta este un formular pentru crearea unei sarcini';
}

public function store()
{
    return 'Aici se salveaza o sarcina noua;';
}

public function show($id)
{
    $task = [
        'id' => $id,
        'title' => 'Pagina de sarcini',
        'description' => 'De scris codul în Laravel pentru a crea pagina de sarcini!'
    ];

    return view('tasks.show', ['task' => $task]);
}


public function edit()
{
    return 'Aici se afiseaza formularul pentru editarea unei sarcini';
}

public function update()
{
    return 'Aici are loc actualizarea unei sarcini';
}

public function destroy()
{
    return 'Aici are loc ștergerea unei sarcini';
}
}

