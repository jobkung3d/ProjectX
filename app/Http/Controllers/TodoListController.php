<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_todo;
class TodoListController extends Controller
{
  public function create()
  {
      return view('todo');
  }

  public function store(Request $request)
  {
      $todo = $this->validate(request(), [
        'name' => 'required',
      ]);

      data_todo::create($todo);

      return back()->with('success', 'Product has been added');;
  }

  public function displayTasks()
  {
      $tasks = data_todo::all()->toArray();
      return view('layouts.todo.todo', compact('tasks'));
  }
  public function destroy($id)
  {
      $task = data_todo::find($id);
      $task->delete();
      return redirect('todo')->with('success','Product has been  deleted');

  }

}
