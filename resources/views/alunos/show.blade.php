@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Instituição</div>

                    <div class="card-body">
                        <p>Nome: {{ $aluno->Nome }}</p>
                        <p>Matricula: {{ $aluno->Matricula }}</p>
                        <p>Curso: {{ $aluno->Curso }}</p>
                        <p>CRA: {{ $aluno->CRA }}</p>
                        <p>UF: {{ $aluno->UF }}</p>
                        <p>Cidade: {{ $aluno->Cidade }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('home') }}"  class="btn btn-primary">Voltar</a>
                        {{--                        <a href="{{ route('instituicoes.edit', $instituicao->Sigla) }}"  class="btn btn-warning">Editar</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection