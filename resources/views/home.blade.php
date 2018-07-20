@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    <h3>Orientações</h3>
                    <a href="{{ route('orientacoes.listagem') }}" class="btn btn-primary">Ir para Orientações</a>
                    <br>
                    <br>
                    <br>
                    <h3>Professores</h3>
                    <p><a href="{{ route('professores.create') }}" class="btn btn-primary">Cadastrar Novo</a></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>Nome</td>
                                <td>Instituição</td>
                                <td>Ação</td>
                            </tr>
                        </thead>
                        <tbody class="tabela-professores">
                        </tbody>
                    </table>
                    <h3>Instituições</h3>
                    <p><a href="{{ route('instituicoes.create') }}" class="btn btn-primary">Cadastrar Nova</a></p>
                    <table class="table">
                        <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Sigla</td>
                            <td>UF</td>
                            <td>Ação</td>
                        </tr>
                        </thead>
                        <tbody class="tabela-instituicoes">
                        </tbody>
                    </table>
                    <h3>Alunos</h3>
                    <p><a href="{{ route('alunos.create') }}" class="btn btn-primary">Cadastrar Novo</a></p>
                    <table class="table">
                        <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Curso</td>
                            <td>UF</td>
                            <td>Ação</td>
                        </tr>
                        </thead>
                        <tbody class="tabela-alunos">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
