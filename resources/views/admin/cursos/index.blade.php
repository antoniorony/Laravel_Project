@extends('layout.site')

@section('titulo', 'Cursos')
    

@section('conteudo')
    <div class="container">
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Publicado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td><img src="{{ asset($registro->imagem)}}" alt="{{ $registro->titulo }}" width="100"/></td>
                        <td>{{ $registro->publicado }}</td>
                        <td>
                            <a class="btn deep-orange col s6" href="{{ route('admin.cursos.editar', $registro->id) }}">Editar</a>

                            <a class="btn deep-orange col s6" href="{{ route('admin.cursos.delete', $registro->id) }}">Excluir</a>
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="waves-effect waves-light btn-large" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
        </div>
    </div>
@endsection