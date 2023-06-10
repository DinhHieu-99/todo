<?php

namespace App\Http\Services;
use App\Models\Todos;
use Illuminate\Support\Facades\Session;

class TodoService{

    
    public function create($request){
        return Todos::create([
            'id' => (int)$request,
            'user_id' => (int)$request,
            'description' => (string)$request->input('description'),
            'is_completed' => (string)$request
        ]);
    }

    public function getAll(){
        return Todos::orderbyDesc('id')->paginate(20);
    }
}