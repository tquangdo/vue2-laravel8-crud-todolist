<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TodoList;
use App\Http\Resources\TodoListCollection;

class TodoListControl extends Controller
{
    public function index()
    {
        $todo_list = TodoList::get();
        return TodoListCollection::collection($todo_list);
    }
    public function add()
    {
    }
}
