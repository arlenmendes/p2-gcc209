@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(!isset($professor))
                        <div class="card-header">Cadastrar</div>
                    @else
                        <div class="card-header">Atualizar</div>
                    @endif
                    <div class="card-body">
                        @if(!isset($professor))
                            <form action="{{route('professores.store')}}" method="post">
                        @else
                            <form action="{{route('professores.update', $professor->ID)}}" method="post">
                                {!! method_field('put') !!}
                        @endif
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="nome">Nome: </label>
                                    <input type="text" name="Nome" class="form-control" value="{{ $professor->Nome or old('Nome') }}" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Instituicao">Instituição</label>
                                    <select name="Instituicao" class="custom-select">
                                        <option selected>Selecione</option>
                                        @foreach ($instituicoes as $instituicao)
                                            <option value="{{$instituicao->Sigla}}">{{$instituicao->Nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Email: </label>
                                    <input type="text" name="Email" class="form-control" value="{{ $professor->Email or old('Email') }}" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Página: </label>
                                    <input type="text" name="Pagina" class="form-control" value="{{ $professor->Pagina or old('Pagina') }}">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Lattes: </label>
                                    <input type="text" name="Lattes" class="form-control" value="{{ $professor->Lattes or old('Lattes') }}" required>
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