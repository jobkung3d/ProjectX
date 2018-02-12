<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\data_todo;
class TodoListController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function create()
  {
      return view('todo');
  }

  public function store(Request $request)
  {
      $todo = $this->validate(request(), [
        'name' => 'required',
        'usr_id' => 'required',
      ]);

      data_todo::create($todo);

      return back()->with('success', 'Product has been added');
  }

  public function displayTasks()
  {
      $user = Auth::User();
      $userId = $user->id;
      $tasks = data_todo::all()->where('usr_id', '=', $userId)->toArray();
      return view('layouts.todo.todo', compact('tasks'));
  }
  public function destroy($id)
  {
      $task = data_todo::find($id);
      $task->delete();
      return redirect('todo')->with('success','Product has been  deleted');

  }

}
