@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(!isset($instituicao))
                        <div class="card-header">Cadastrar</div>
                    @else
                        <div class="card-header">Atualizar</div>
                    @endif
                    <div class="card-body">
                        <h3>Instituição</h3>
                        @if(!isset($instituicao))
                            <form action="{{route('instituicoes.store')}}" method="post">
                                @else
                                    <form action="{{route('instituicoes.update', $instituicao->Sigla)}}" method="post">
                                        {!! method_field('put') !!}
                                        @endif
                                        {!! csrf_field() !!}
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="nome">Nome: </label>
                                                <input type="text" name="Nome" class="form-control" value="{{ $instituicao->Nome or old('Nome') }}" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="email">Sigla: </label>
                                                <input type="text" name="Sigla" class="form-control" value="{{ $instituicao->Sigla or old('Sigla') }}" @if(isset($instituicao)) disabled @endif>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="email">UF: </label>
                                                <input type="text" name="UF" class="form-control" value="{{ $instituicao->UF or old('UF') }}">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="email">Cidade: </label>
                                                <input type="text" name="Cidade" class="form-control" value="{{ $instituicao->Cidade or old('Cidade') }}" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="email">Pais: </label>
                                                <input type="text" name="Pais" class="form-control" value="{{ $instituicao->Pais or old('Pais') }}" required>
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