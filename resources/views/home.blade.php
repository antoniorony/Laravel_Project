@extends('layout.site')

@section('titulo', 'Cursos')
    

@section('conteudo')
    <div class="container">
        <div class="row">
            @foreach($cursos as $curso)
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="{{asset($curso->imagem)}}">
                    </div>
                    <div class="card-content">
                        <h4>{{$curso->titulo}}</h4>
                        <p>{{$curso->descricao}}</p>
                    </div>
                        <div class="card-action">
                        <a href="#">Leia Mais...</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            {{ $cursos->links() }}            
        </div>
    </div>
@endsection