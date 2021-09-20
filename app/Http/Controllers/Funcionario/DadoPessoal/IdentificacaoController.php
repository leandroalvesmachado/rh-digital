<?php

namespace App\Http\Controllers\Funcionario\DadoPessoal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\PaisRepository;
use App\Repositories\EstadoRepository;
use App\Repositories\MunicipioRepository;
use App\Repositories\SexoRepository;
use App\Repositories\EstadoCivilRepository;
use App\Repositories\NacionalidadeRepository;
use App\Repositories\FuncionarioRepository;
use App\Repositories\FuncionarioTipoRepository;

use App\Models\Funcionario;

use App\Http\Requests\Funcionario\DadoPessoal\StoreIdentificacaoRequest;
use App\Http\Requests\Funcionario\DadoPessoal\UpdateIdentificacaoRequest;

class IdentificacaoController extends Controller
{
    public function __construct(
        PaisRepository $paisRepository,
        EstadoRepository $estadoRepository,
        MunicipioRepository $municipioRepository,
        SexoRepository $sexoRepository,
        EstadoCivilRepository $estadoCivilRepository,
        NacionalidadeRepository $nacionalidadeRepository,
        FuncionarioRepository $funcionarioRepository,
        FuncionarioTipoRepository $funcionarioTipoRepository
    )
    {
        $this->authorizeResource(Funcionario::class, 'funcionario');
        $this->paisRepository = $paisRepository;
        $this->estadoRepository = $estadoRepository;
        $this->municipioRepository = $municipioRepository;
        $this->sexoRepository = $sexoRepository;
        $this->estadoCivilRepository = $estadoCivilRepository;
        $this->nacionalidadeRepository = $nacionalidadeRepository;
        $this->funcionarioRepository = $funcionarioRepository;
        $this->funcionarioTipoRepository = $funcionarioTipoRepository;
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
    public function create()
    {
        return view('funcionario.dado-pessoal.identificacoes.create', [
            'paises' => $this->paisRepository->selectOption(),
            'estados' => $this->estadoRepository->selectOption(),
            'municipios' => $this->municipioRepository->selectOption(),
            'nacionalidades' => $this->nacionalidadeRepository->selectOption(),
            'sexos' => $this->sexoRepository->selectOption(),
            'estadosCivis' => $this->estadoCivilRepository->selectOption(),
            'pcds' => ['' => 'Escolha a opção', 'SIM' => 'Sim', 'NAO' => 'Não'],
            'funcionarioTipos' => $this->funcionarioTipoRepository->selectOption()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdentificacaoRequest $request)
    {
        $result = $this->funcionarioRepository->store($request->except(['_token']));

        if ($result === true) {
            flash('Identificação do funcionário cadastrada com sucesso!')->success();

            return redirect()->route('funcionario.dado-pessoal.home.index');
        }

        flash('Erro ao cadastrar a identificação do funcionário! '.$result)->error();

        return redirect()->route('funcionario.dado-pessoal.identificacoes.create');
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
    public function edit(Funcionario $funcionario)
    {
        return view('funcionario.dado-pessoal.identificacoes.edit', [
            'funcionario' => $funcionario,
            'paises' => $this->paisRepository->selectOption(),
            'estados' => $this->estadoRepository->selectOption(),
            'municipios' => $this->municipioRepository->selectOption(),
            'nacionalidades' => $this->nacionalidadeRepository->selectOption(),
            'sexos' => $this->sexoRepository->selectOption(),
            'estadosCivis' => $this->estadoCivilRepository->selectOption(),
            'pcds' => ['' => 'Escolha a opção', 'SIM' => 'Sim', 'NAO' => 'Não'],
            'funcionarioTipos' => $this->funcionarioTipoRepository->selectOption()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIdentificacaoRequest $request, Funcionario $funcionario)
    {
        $result = $this->funcionarioRepository->update($funcionario, $request->except(['_token']));

        if ($result === true) {
            flash('Identificação do funcionário atualizada com sucesso!')->success();

            return redirect()->route('funcionario.dado-pessoal.home.index');
        }

        flash('Erro ao atualizar a identificação do funcionário! '.$result)->error();

        return redirect()->route('funcionario.dado-pessoal.identificacoes.edit', [
            'funcionario' => $funcionario
        ]);
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
