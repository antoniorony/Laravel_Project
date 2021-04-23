@extends('layout.site')

@section('titulo', 'Cursos')
    

@section('conteudo')
    <div class="container">
        <div class="row">
            <h3>Editar</h3>
            <form class="" action="{{ route('admin.cursos.atualizar', $registro->id) }}" method = "post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                
                @include('admin.cursos._form')

                <button class="btn deep-orange">Atualizar</button>

            </form>
        </div>
    </div>
@endsection