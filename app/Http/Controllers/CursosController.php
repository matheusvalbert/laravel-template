<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CursosController extends Controller
{
    public function index(){
        $cursos = Curso::all();
        return view ('cursos.index',['cursos' => $cursos]);

    }


    public function show($id){
        $curso = Curso::findorfail($id);
        return view ('cursos.show',['curso' => $curso]);

    }


    public function zas($id){
        $curso = Curso::findorfail($id);
        return view ('cursos.zas',['curso' => $curso]);
    }
    
    public function Contact(){
        return view ('cursos.contact');
    
    }
    public function join($id){
        $admin = Auth::user();

        if($admin->permissions != 0 && $admin->permissions != 3){
            return redirect ('/cursos');
        }

        $curso = curso::findOrfail($id);
        if($curso->status == 2 || $curso->status == 3){
            return back();
        }

        $user = Auth::user();

        $cursosusuario = $user->cursos->toArray();
        foreach ($cursosusuario as $cursousuario){
            if($cursousuario['id'] == $id){
                return redirect ('/cursos');
            } 
        }
        $user->cursos()->attach($id);

        $curso = curso::findOrfail($id);
        
        $alunos = User::where('permissions', '=', 0)->Orwhere('permissions', '=', 3)->get();
        $count = 0;
        foreach($alunos as $aluno){
            foreach($aluno->cursos as $cursoalu){
                if($cursoalu->id == $curso->id){
                    $count = $count + 1;
                }
            }
        }
    
        $curso = Curso::findOrfail($id);
    
        if($curso->status != 3){
        if($count < $curso->minalu ){
         $curso->status = 0;
        }
        elseif($count >= $curso->maxalu){
            $curso->status = 2;
        }
        else{
            $curso->status = 1;
        }

    }
        $curso->save();
        

        return redirect ('/home')->with('status','Matriculado com sucesso em: ' . $curso->name);
    }
    

}