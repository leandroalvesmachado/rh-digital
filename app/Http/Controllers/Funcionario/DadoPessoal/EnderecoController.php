<?php

namespace App\Http\Controllers\Funcionario\DadoPessoal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\FuncionarioEnderecoRepository;
use App\Repositories\PaisRepository;
use App\Repositories\EstadoRepository;
use App\Repositories\MunicipioRepository;

use App\Models\Funcionario;
use App\Models\FuncionarioEndereco;

use App\Http\Requests\Funcionario\DadoPessoal\StoreFuncionarioEnderecoRequest;

class EnderecoController extends Controller
{
    public function __construct(
        FuncionarioEnderecoRepository $funcionarioEnderecoRepository,
        PaisRepository $paisRepository,
        EstadoRepository $estadoRepository,
        MunicipioRepository $municipioRepository
    )
    {
        // $this->authorizeResource(FuncionarioEndereco::class, 'funcionarioEndereco');
        $this->funcionarioEnderecoRepository = $funcionarioEnderecoRepository;
        $this->paisRepository = $paisRepository;
        $this->estadoRepository = $estadoRepository;
        $this->municipioRepository = $municipioRepository;
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
        return view('funcionario.dado-pessoal.enderecos.create', [
            'funcionario' => $funcionario,
            'paises' => $this->paisRepository->selectOption(),
            'estados' => $this->estadoRepository->selectOption(),
            'municipios' => $this->municipioRepository->selectOption()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFuncionarioEnderecoRequest $request, Funcionario $funcionario)
    {
        $result = $this->funcionarioEnderecoRepository->store($funcionario, $request->except(['_token']));

        if ($result === true) {
            flash('Endereço adicionado com sucesso!')->success();

            return redirect()->route('funcionario.dado-pessoal.enderecos.create', [
                'funcionario' => $funcionario
            ]);
        }

        flash('Erro ao salvar o endereço! '.$result)->error();

        return redirect()->route('funcionario.dado-pessoal.enderecos.create', [
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
    public function destroy(Funcionario $funcionario, FuncionarioEndereco $funcionarioEndereco)
    {
        $result = $this->funcionarioEnderecoRepository->destroy($funcionarioEndereco);

        if ($result === true) {
            flash('Endereço apagado com sucesso!')->success();
        } else {
            flash('Erro ao deletar o endereço! '.$result)->error();
        }

        return redirect()->route('funcionario.dado-pessoal.enderecos.create', [
            'funcionario' => $funcionario
        ]);
    }
}
