<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreTodoRequest;
// use App\Services\TodoService;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Todo::all();
    }

    /**
     * Store a newly created resource in storage.
     */

    //using FormRequest    ||  returns too few arguments
    // public function store(StoreTodoRequest $storeTodoRequest, TodoService $todoService)
    // {
    //     $todo = $todoService->store($storeTodoRequest->validate());
    //     return $todo;
    // }
    public function store(Request $request)
    {
        return Todo::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Todo::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo = Todo::find($id);
        $todo->update($request->all());

        return $todo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Todo::destroy($id);
    }
}
