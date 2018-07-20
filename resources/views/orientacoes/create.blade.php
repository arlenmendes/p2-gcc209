@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    @if(!isset($orientacao))
                        <div class="card-header">Cadastrar</div>
                    @else
                        <div class="card-header">Atualizar</div>
                    @endif
                    <div class="card-body">
                        @if(!isset($orientacao))
                            <form action="{{route('orientacoes.store')}}" method="post">
                        @else
                            <form action="{{route('orientacoes.update', $orientacao->ID)}}" method="post">
                            {!! method_field('put') !!}
                        @endif
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="Tema">Tema:</label>
                                    <input type="text" name="Tema" class="form-control" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Tipo">Tipo:</label>
                                    <select name="Tipo" id="" class="form-control" required>
                                        {{--'TCC','TCC-EST','EST','MONITORIA','IC','TCC-POS'--}}
                                        <option value="">Selecione o Tipo</option>
                                        <option value="TCC">TCC</option>
                                        <option value="TCC-EST">TCC-EST</option>
                                        <option value="EST">EST</option>
                                        <option value="MONITORIA">MONITORIA</option>
                                        <option value="IC">IC</option>
                                        <option value="TCC-POS">TCC-POS</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Aluno">Professor: </label>
                                    <select name="Professor" class="form-control" required>
                                        <option value="" >Selecione Professor</option>
                                        @foreach($professores as $professor)
                                            <option value="{{ $professor->ID }}">{{ $professor->Nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Aluno">Aluno: </label>
                                    <select name="Aluno" id="" class="form-control" required>
                                        <option value="" >Selecione Aluno</option>
                                        @foreach($alunos as $aluno)
                                            <option value="{{ $aluno->Matricula }}">{{ $aluno->Nome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Inicio">Ano Inicio:</label>
                                    <input type="number" name="Inicio" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="Fim">Ano Fim:</label>
                                    <input type="number" name="Fim" class="form-control">
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