@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Orientação</div>

                    <div class="card-body">
                        <p>Professor: {{ $orientacao->Professor }}</p>
                        <p>Aluno: {{ $orientacao->Aluno }}</p>
                        <p>Tipo: {{ $orientacao->Tipo }}</p>
                        <p>Tema: {{ $orientacao->Tema }}</p>
                        <p>Ano Inicio: {{ $orientacao->Inicio }}</p>
                        <p>Ano Fim: {{ $orientacao->Fim }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('orientacoes.listagem') }}"  class="btn btn-primary">Voltar</a>
{{--                        <a href="{{ route('orientacoes.edit', $orientacao->ID) }}"  class="btn btn-warning">Editar</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection