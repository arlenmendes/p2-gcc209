<?php

namespace App\Http\Controllers;

use App\Area;
use App\Instituicao;
use App\Pesquisa;
use App\Professor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_encode(Professor::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instituicoes = Instituicao::all();
        return view('professores.create', compact(['instituicoes']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Professor::create($request->all());

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function show(int $ID)
    {
        $professor = Professor::find($ID);
        $pesquisas = Pesquisa::where('Professor', $ID)->get();

        foreach ($pesquisas as $pesquisa) {
            $pesquisa->Area = Area::where('ID', $pesquisa->Area)->first()->Nome;
        }

        return view('professores.show', compact(['professor', 'pesquisas']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professor = Professor::find($id);
        $instituicoes = Instituicao::all();
        return view('professores.create', compact(['instituicoes', 'professor']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $dados = $request->all();
        $professor = Professor::find($id)->update($dados);
//        echo "<pre>";
//        print_r($professor);
//        exit();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Professor  $professor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professor $professor)
    {
        //
    }
}
