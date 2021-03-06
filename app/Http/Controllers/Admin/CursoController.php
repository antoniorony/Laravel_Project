<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Curso;

class CursoController extends Controller
{
    public function index(){
        $registros = Curso::all();

        return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        //dd($dados);

        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }

        if ($req->hasFile('imagem')) {
            $imagem =$req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/cursos";
            $extensao = $imagem->getClientOriginalExtension();
            $nomeImagem = "imagem_".$num.".".$extensao;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::create($dados);

        return redirect()->route('admin.cursos');
    }

    public function editar($id){
        $registro = Curso::find($id);

        return view('admin.cursos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();

        if (isset($dados['publicado'])) {
            $dados['publicado'] = 'sim';
        } else {
            $dados['publicado'] = 'nao';
        }

        if ($req->hasFile('imagem')) {
            $imagem =$req->file('imagem');
            $num = rand(1111, 9999);
            $dir = "img/cursos";
            $extensao = $imagem->getClientOriginalExtension();
            $nomeImagem = "imagem_".$num.".".$extensao;
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::find($id)->update($dados);

        return redirect()->route('admin.cursos');
    }

    public function delete($id){
        Curso::find($id)->delete();

        return redirect()->route('admin.cursos');
    }
}
