<?php

namespace App\Http\Controllers;

use App\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    public function index() {
        return json_encode(Instituicao::all());
    }

    public function show($sigla) {
        $instituicao = Instituicao::where('Sigla', $sigla)->first();
        return view('instituicoes.show', compact(['instituicao']));
    }

    public function create() {
        return view('instituicoes.create');
    }

    public function store(Request $request) {
//        echo "<pre>";
//        print_r($request->all());
//        exit();
        Instituicao::create($request->all());

        return redirect()->route('home');
    }

    public function edit($sigla) {

        $instituicao = Instituicao::where('Sigla', $sigla)->first();
        return view('instituicoes.create', compact(['instituicao']));
    }

    public function update(Request $request, $sigla) {
        $instituicao = Instituicao::where('Sigla', $sigla)->first();

        $instituicao->update($request->all());

        return redirect()->route('home');
    }


}
