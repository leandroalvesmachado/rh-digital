<?php

namespace App\Http\Controllers\Funcionario\DadoPessoal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\FuncionarioDependenteRepository;

use App\Models\Funcionario;
use App\Models\FuncionarioDependente;

use App\Http\Requests\Funcionario\DadoPessoal\StoreFuncionarioDependenteRequest;

class DependenteController extends Controller
{
    public function __construct(
        FuncionarioDependenteRepository $funcionarioDependenteRepository
    )
    {
        // $this->authorizeResource(FuncionarioDependente::class, 'funcionarioDependente');
        $this->funcionarioDependenteRepository = $funcionarioDependenteRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Funcionario $funcionario)
    {
        return view('funcionario.dado-pessoal.dependentes.create', [
            'funcionario' => $funcionario
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFuncionarioDependenteRequest $request, Funcionario $funcionario)
    {
        $result = $this->funcionarioDependenteRepository->store($funcionario, $request->except(['_token']));

        if ($result === true) {
            flash('Dependente adicionado com sucesso!')->success();
        } else {
            flash('Erro ao salvar o dependente! '.$result)->error();
        }

        return redirect()->route('funcionario.dado-pessoal.dependentes.create', [
            'funcionario' => $funcionario
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy(Funcionario $funcionario, FuncionarioDependente $funcionarioDependente)
    {
        $result = $this->funcionarioDependenteRepository->destroy($funcionarioDependente);

        if ($result === true) {
            flash('Dependente apagado com sucesso!')->success();
        } else {
            flash('Erro ao deletar o dependente! '.$result)->error();
        }

        return redirect()->route('funcionario.dado-pessoal.dependentes.create', [
            'funcionario' => $funcionario
        ]);
    }
}
