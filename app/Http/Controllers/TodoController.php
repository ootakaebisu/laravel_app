<?php

namespace App\Http\Controllers;

// 追加
use App\Http\Requests\TodoRequest;
use App\Todo;

class TodoController extends Controller
{
    // 追加
    private $todo;

    // 追加
    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

     // 追加
     public function index()
     {
        $todos = $this->todo->all();
          // 追加
          return view('todo.index', ['todos' => $todos]);
     }

    // 追加
    public function create()
    {
        return view('todo.create');
    }

    // 修正
    public function store(TodoRequest $request)
    {
        $inputs = $request->all();
        $this->todo->fill($inputs);
        $this->todo->save();
        // 追加
        return redirect()->route('todo.index');
    }

    // 追加
    public function show($id)
    {
        $todo = $this->todo->find($id);
        // 追加
        return view('todo.show', ['todo' => $todo]);
    }

    // 追加
    public function edit($id)
    {
        $todo = $this->todo->find($id);
        return view('todo.edit', ['todo' => $todo]);
    }

    // 追加
    public function update(TodoRequest $request, $id)
    {
        // 追加
        $inputs = $request->all();
        $todo = $this->todo->find($id);
        $todo->fill($inputs);
        $todo->save();
        return redirect()->route('todo.show', $todo->id);
    }

    // 追加
    public function delete($id)
    {
        // 追加
        $todo = $this->todo->find($id);
        $todo->delete();
        return redirect()->route('todo.index');

    }
}

