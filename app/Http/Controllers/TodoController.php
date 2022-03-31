<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index(Request $request)
    {
        return response()->json(Todo::whereUserId($request->user()->id)->get());
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data['user_id'] = $request->user()->id;
        $data['name'] = $request->name;

        $todo = Todo::create($data);

        return response()->json($todo);
    }


    public function show(Todo $todo)
    {
        //
    }


    public function edit(Todo $todo)
    {
        //
    }


    public function update(Request $request, Todo $todo)
    {
        $todo->update(['name'=>$request->name ]);
        return response()->json($todo);
    }


    public function destroy(Todo $todo)
    {
        $todo->delete();
        return response()->json('success');
    }
}
