<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\TodoList;
use App\Http\Resources\TodoListCollection;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class TodoListControl extends Controller
{
    public function index()
    {
        $todo_list = TodoList::get();
        return TodoListCollection::collection($todo_list);
    }
    public function add(Request $req)
    {
        $todo_list = new TodoList;
        $todo_list->content = $req->content;
        $todo_list->checked = $req->checked;
        $todo_list->done = $req->done;
        $todo_list->created_at = now();
        $todo_list->created_at = now();
        $todo_list->save();
        $todo_list = TodoList::get();
        return TodoListCollection::collection($todo_list);
    }
    public function delone(Request $req)
    {
        TodoList::find($req->id)->delete(); // vi la "TodoList::find()" nen phai truyen "JSON.id" chu KO phai index of array
        $todo_list = TodoList::get();
        return TodoListCollection::collection($todo_list);
    }
    public function delall(Request $req)
    {
        foreach ($req->in_params as $item_param) {
            if ($item_param['checked'] == 1) {
                TodoList::where('id', $item_param['id'])->delete();
            }
        }
        $todo_list = TodoList::get();
        return TodoListCollection::collection($todo_list);
    }
    public function doneall(Request $req)
    {
        // cach truc tiep update trong DB:
        // DB::table("todolist")->whereIn('id', $arr_tmp)->update(['done',1]);
        foreach ($req->in_params as $item_param) {
            if ($item_param['checked'] == 1) {
                $todo_tmp = TodoList::where('id', $item_param['id'])->first();
                $todo_tmp->done = 1;
                $todo_tmp->save();
            }
        }
        $todo_list = TodoList::get();
        return TodoListCollection::collection($todo_list);
    }
}
