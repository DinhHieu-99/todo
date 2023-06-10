<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todos;

class TodoController extends Controller
{

    public function index(){
        $todos = Todos::all();
        return view('main',compact('todos'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'description' => 'required'
        ]);
        Todos::create($data);
        return back();
    }

    public function destroy(Todos $todos){
        $todos->delete();
        return back();
    }
}