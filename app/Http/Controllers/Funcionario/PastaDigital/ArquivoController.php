<?php

namespace App\Http\Controllers\Funcionario\PastaDigital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Funcionario;
use App\Models\TipoArquivo;
use App\Models\FuncionarioArquivo;

use App\Repositories\FuncionarioArquivoRepository;

use App\Http\Requests\Funcionario\PastaDigital\StoreFuncionarioArquivoRequest;

class ArquivoController extends Controller
{
    public function __construct(
        FuncionarioArquivoRepository $funcionarioArquivoRepository
    )
    {
        // $this->authorizeResource(FuncionarioContato::class, 'funcionarioContato');
        $this->funcionarioArquivoRepository = $funcionarioArquivoRepository;
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
    public function create(Funcionario $funcionario, TipoArquivo $tipoArquivo)
    {
        return view('funcionario.pasta-digital.arquivos.create', [
            'funcionario' => $funcionario,
            'tipoArquivo' => $tipoArquivo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(
        StoreFuncionarioArquivoRequest $request,
        Funcionario $funcionario,
        TipoArquivo $tipoArquivo
    )
    {
        $result = $this->funcionarioArquivoRepository->store(
            $funcionario,
            $tipoArquivo,
            $request->except(['_token'])
        );

        if ($result === true) {
            flash('Contato do funcionário adicionado com sucesso!')->success();
        } else {
            flash('Erro ao salvar o contato do funcionário! '.$result)->error();
        }

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
    public function destroy($id)
    {
        //
    }
}
