@extends('layout.site')

@section('titulo', 'Contato')
    

@section('conteudo')
    <h3>Essa é minha view Index</h3>

    @foreach ($contatos as $contato)
        <p>{{ $contato->nome }}</p>
        <p>{{ $contato->telefone }}</p>
    @endforeach
@endsection

