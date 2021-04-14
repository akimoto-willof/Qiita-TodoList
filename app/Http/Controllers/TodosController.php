<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index() {
        $todos = Todo::all();
        return view('todos.index')->with('todos',$todos);
    }

    // 追加処理
    public function store(Request $request) {
        $todo = new Todo();
        $todo->body = $request->body;
        $todo->save();
        return redirect('/');
    }

    // 削除処理
    public function destroy(todo $todo) {
        $todo->delete();
        return redirect('/');
    }

    // 遷移処理
    public function edit(todo $todo) {
        return view('todos.edit')->with('todo',$todo);
    }

    // 更新処理
    public function update(todo $todo) {
        $todo->body = $request->body;
        $todo->save();
        return redirect('/');
    }
}
