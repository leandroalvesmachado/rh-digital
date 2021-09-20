<?php

namespace App\Http\Controllers\Funcionario\DadoPessoal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\FuncionarioContatoRepository;

use App\Models\Funcionario;
use App\Models\FuncionarioContato;

use App\Http\Requests\Funcionario\DadoPessoal\StoreContatoRequest;

class ContatoController extends Controller
{
    public function __construct(
        FuncionarioContatoRepository $funcionarioContatoRepository
    )
    {
        // $this->authorizeResource(FuncionarioContato::class, 'funcionarioContato');
        $this->funcionarioContatoRepository = $funcionarioContatoRepository;
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
        return view('funcionario.dado-pessoal.contatos.create', [
            'funcionario' => $funcionario
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContatoRequest $request, Funcionario $funcionario)
    {
        $result = $this->funcionarioContatoRepository->store($funcionario, $request->except(['_token']));

        if ($result === true) {
            flash('Contato do funcionário adicionado com sucesso!')->success();

            return redirect()->route('funcionario.dado-pessoal.contatos.create', [
                'funcionario' => $funcionario
            ]);
        }

        flash('Erro ao salvar o contato do funcionário! '.$result)->error();

        return redirect()->route('funcionario.dado-pessoal.contatos.create', [
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
    public function destroy(Funcionario $funcionario, FuncionarioContato $funcionarioContato)
    {
        $result = $this->funcionarioContatoRepository->destroy($funcionarioContato);

        if ($result === true) {
            flash('Contato apagado com sucesso!')->success();

            return redirect()->route('funcionario.dado-pessoal.contatos.create', [
                'funcionario' => $funcionario
            ]);
        }

        flash('Erro ao deletar o contato! '.$result)->error();

        return redirect()->route('funcionario.dado-pessoal.contatos.create', [
            'funcionario' => $funcionario
        ]);
    }
}
