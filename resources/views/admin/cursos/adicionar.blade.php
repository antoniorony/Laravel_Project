@extends('layout.site')

@section('titulo', 'Cursos')
    

@section('conteudo')
    <div class="container">
        <div class="row">
            <form class="" action="{{ route('admin.cursos.salvar') }}" method = "post" enctype="multipart/form-data">
                @csrf

                @include('admin.cursos._form')

                <button class="btn deep-orange">Salvar</button>

            </form>
        </div>
    </div>
@endsection