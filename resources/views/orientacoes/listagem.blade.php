@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Orientações</div>

                    <div class="card-body">
                        <p><a href="{{ route('home') }}" class="btn btn-primary">Voltar Para Home</a></p>
                        <p><a href="{{ route('orientacoes.create') }}" class="btn btn-success">Cadastrar Orientacao</a></p>

                        <table class="table">
                            <thead>
                            <tr>
                                <td>Professor</td>
                                <td>Aluno</td>
                                <td>Ano Fim</td>
                                <td>Ação</td>
                            </tr>
                            </thead>
                            <tbody class="tabela-orientacoes">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection