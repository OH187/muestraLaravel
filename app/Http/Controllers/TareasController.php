<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     *  index para tareas
     */

    public function store(Request $request){

        $request->validate([
            'title' => 'required|min:3'
        ]);
        $tarea = new Tarea();
        $tarea->title = $request->title;
        $tarea->save();

        //redirigiendo
        return redirect()->route('tareas')->with('success','Tarea creada correctamente');
    }

    public function index(){
        $tareas = Tarea::all();
        return view('tareas.index', ['tareas' => $tareas]);
    }

    public function show($id){
        $tarea = Tarea::find($id);
        return view('tareas.show', ['tarea' => $tarea]);
    }
    
    public function update(){
        $tareas = Tarea::all();
        return view('tareas.index', ['tareas' => $tareas]);
    }
    public function destroy(){
        $tareas = Tarea::all();
        return view('tareas.index', ['tareas' => $tareas]);
    }
}
