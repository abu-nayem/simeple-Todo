<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Todo;
use Validator;
class TodoController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	return view ('admin.main.mainContent');
    }

    public function store(Request $request){
    	$inputs=$request->except('_token');
        $validator=Validator::make($inputs,[
            'title'=>'required|min:4',
  
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $todo=new Todo();
        $todo->title=trim($inputs['title']);
        $todo->completed=0;
        $todo->user_id= Auth::id();
        $todo->save();
        return back();
    }

    public function edit($id){
        $todo=Todo::find($id);
        return view('todo.edittodo',['todo'=>$todo]);
    }

    public function update(Request $request){
        $todo=Todo::find($request->id);
        $todo->title=trim($request->title);
        $todo->save();
        return redirect('/todos/todo-list');
    }

    public function delete($id){
        $todo=Todo::where('id',$id)->withTrashed()->first();
        $todo->delete();
        return back();
    }

    // public function getDeletedData(){
    //     $allDeleteddata=Todo::withTrashed()->get();
    //     return view('todo.alldeleteddata',['allDeleteddata'=>$allDeleteddata]);
    // }

    public function getTodoList(){
        $allTodos=Todo::where('user_id',Auth::id())->withTrashed()->get();
        return view('todo.allTodoList',['allTodoLists'=>$allTodos]);
    }

    public function status($id){
       $todo=Todo::find($id);
        $todo->completed=1;
        $todo->save();
        return back();
    }
    public function getDeletedData (){
        return view('todo.allDeleteddata');
    }
}
