@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Instituição</div>

                    <div class="card-body">
                        <p>Nome: {{ $instituicao->Nome }}</p>
                        <p>Sigla: {{ $instituicao->Sigla }}</p>
                        <p>UF: {{ $instituicao->UF }}</p>
                        <p>Cidade: {{ $instituicao->Cidade }}</p>
                        <p>Pais: {{ $instituicao->Pais }}</p>
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