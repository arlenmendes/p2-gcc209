@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Professor</div>

                    <div class="card-body">
                        <p>Professor: {{ $professorDados->Nome }}</p>
                        <p>Instituição: {{ $professorDados->Instituicao }}</p>
                        <p>Email: {{ $professorDados->Email }}</p>
                        <p>Página: {{ $professorDados->Pagina }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection