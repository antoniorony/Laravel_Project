<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contato;

class ContatoController extends Controller
{
    public function index(){

        $contatos = [
            (object)["nome"=>"maria", "telefone" => "889995252"],
            (object)["nome"=>"joao", "telefone" => "85565656"],
            (object)["nome"=>"paulo", "telefone" => "8525646565"]
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        return view('contato.index', compact('contatos'));
    }
    public function criar(Request $req){
        dd($req->all());
        return "Bem Vindo a rota de Criar contato";
    }
    public function editar(Request $req){
        dd($req->all());
        return "Bem Vindo a rota de Editar contato";
    }
}
