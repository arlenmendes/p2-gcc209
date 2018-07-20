@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Professor</div>

                    <div class="card-body">
                        <p>Professor: {{ $professor->Nome }}</p>
                        <p>Instituição: {{ $professor->Instituicao }}</p>
                        <p>Email: {{ $professor->Email }}</p>
                        <p>Lattes: {{ $professor->Lattes }}</p>
                        @if ($professor->Pagina != '')
                            <p>Página: <a href="{{ $professor->Pagina }}">Seguir para página -></a></p>
                            @else
                            <p>Página: Não tem</p>
                        @endif
                        <h3>Pesquisas</h3>
                        <div class="row">
                            @foreach($pesquisas as $pesquisa)
                                <div class="card col-md-4">
                                    <div class="card-body">
                                        <p>Linha: {{$pesquisa->Linha}}</p>
                                        <p>Area: {{$pesquisa->Area}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('home') }}"  class="btn btn-primary">Voltar</a>
                        <a href="{{ route('professores.edit', $professor->ID) }}"  class="btn btn-warning">Editar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection