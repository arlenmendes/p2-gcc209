<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Orientacao;
use App\Professor;
use Illuminate\Http\Request;

class OrientacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orientacoes = Orientacao::all();
        foreach ($orientacoes as $orientacao) {

            $orientacao->Aluno = Aluno::where('Matricula', $orientacao->Aluno)->first()->Nome;
            $orientacao->Professor = Professor::where('ID', $orientacao->Professor)->first()->Nome;

        }

        return json_encode($orientacoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $professores = Professor::all();
        $alunos = Aluno::all();
        return view('orientacoes.create', compact(['alunos', 'professores']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "<pre>";
        Orientacao::create($request->all());
        print_r($request->all());
        return redirect()->route('orientacoes.listagem');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orientacao = Orientacao::where('ID', $id)->first();

        $orientacao->Aluno = Aluno::where('Matricula', $orientacao->Aluno)->first()->Nome;
        $orientacao->Professor = Professor::where('ID', $orientacao->Professor)->first()->Nome;

        return view('orientacoes.show', compact(['orientacao']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
