@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(!isset($aluno))
                        <div class="card-header">Cadastrar</div>
                    @else
                        <div class="card-header">Atualizar</div>
                    @endif
                    <div class="card-body">
                        <h3>Aluno</h3>
                        @if(!isset($aluno))
                            <form action="{{route('alunos.store')}}" method="post">
                        @else
                            <form action="{{route('alunos.update', $aluno->Matricula)}}" method="post">
                            {!! method_field('put') !!}
                        @endif
                                        {!! csrf_field() !!}
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="nome">Nome: </label>
                                                <input type="text" name="Nome" class="form-control" value="{{ $aluno->Nome or old('Nome') }}" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Matricula">Matricula: </label>
                                                <input type="text" name="Matricula" class="form-control" value="{{ $aluno->Matricula or old('Nome') }}" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Curso">Curso: </label>
                                                <select name="Curso" class="custom-select">
                                                    <option selected>Selecione</option>
                                                    @foreach ($cursos as $curso)
                                                        <option value="{{ $curso->Codigo}}">{{$curso->Nome}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="UF">UF: </label>
                                                <select name="UF" class="custom-select">
                                                    <option selected>Selecione</option>
                                                    <option value="RJ">RJ</option>
                                                    <option value="MG">MG</option>
                                                    <option value="SP">SP</option>
                                                    <option value="ES">ES</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Cidade">Cidade: </label>
                                                <input type="text" name="Cidade" class="form-control" value="{{ $instituicao->Cidade or old('Cidade') }}" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="CRA">CRA: </label>
                                                <input type="text" name="CRA" class="form-control" value="{{ $aluno->CRA or old('Pais') }}" required>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary">Salvar</button>
                                    </form>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('home') }}" class="btn btn-warning">Votlar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection