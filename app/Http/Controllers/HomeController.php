<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Examen;
use App\Pregunta;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuarios = User::get();
        $examenes = Examen::get();

        return view('home', compact('usuarios','examenes'));
    }

    public function informacion($id){
        $examen = Examen::find($id);
        return view('user.infoExamen', compact('examen'));
    }

    public function examen($id){
        $examen = Examen::find($id);
        $preguntas = Pregunta::where('id_examen',$id)->get();
        return view('user.examen', compact('preguntas','examen'));
    }
}
