<?php
// app/Http/Controllers/TaskController.php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Listar todas las tareas
    public function index(Request $request)
    {
        // Obtener el término de búsqueda de la descripción (si está presente)
        $search = $request->input('search');

        // Consultar las tareas, filtrando por la descripción si se proporciona un término de búsqueda
        $tasks = Task::when($search, function ($query, $search) {
            return $query->where('description', 'like', '%' . $search . '%');
        })->paginate(10);  // Paginación de 10 resultados por página

        // Devolver los resultados paginados
        return response()->json($tasks);
    }

    // Crear una nueva tarea
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'string',
            'completed' => 'boolean',
        ]);

        $task = Task::create($request->all());

        return response()->json($task, 201);
    }

    // Mostrar una tarea específica
    public function show($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        return response()->json($task);
    }

    // Actualizar una tarea
    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $request->validate([
            'description' => 'string',
            'completed' => 'boolean',
        ]);

        $task->update($request->all());

        return response()->json($task);
    }

    // Eliminar una tarea
    public function destroy($id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json(['message' => 'Task not found'], 404);
        }

        $task->delete();

        return response()->json(['message' => 'Task deleted']);
    }
}
