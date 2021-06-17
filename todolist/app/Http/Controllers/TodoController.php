<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todolist;

class TodoController extends Controller
{
    public function index() {
        $items  = todolist::all();

        return view('todo',['items'=>$items]);
    }
    public function create(Request $request) {
        $this->validate($request,todolist::$rules);
        $todo = new todolist;
        $form =$request->all();
        unset($form['_token_']);
        $todo->fill($form)->save();
        return redirect('/');
    }

    public function update(Request $request) {
        $this->validate($request,todolist::$rules);
        $todo = todolist::find($request->id);
        $form = $request->all();
        $todo->fill($form)->save();
        return redirect('/');
    }

    public function delete(Request $request){
        todolist::find($request->id)->delete();
        return redirect('/');
    }
}
