<?php

namespace App\Services;

use App\Models\Todo;

class TodoService
{
    public function store(array $todoDetails): Todo
    {
        $todo = Todo::create([
            'title' => $todoDetails['title'],
            'description' => $todoDetails['description']
        ]);

        return $todo;
    }
}
