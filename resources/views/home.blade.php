@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3>Professores</h3>
                    <p><button class="btn btn-primary">Cadastrar Novo</button></p>
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
