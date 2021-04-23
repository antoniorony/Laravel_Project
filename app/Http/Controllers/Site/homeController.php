<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Curso;

class homeController extends Controller
{
    public function index(){
        $cursos = Curso::paginate(2);
        return view('home', compact('cursos'));
    }
}
