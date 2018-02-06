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
}
