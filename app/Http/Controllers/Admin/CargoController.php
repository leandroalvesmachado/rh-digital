<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\CargoRepository;
use App\Repositories\CargoSimboloRepository;

use App\Models\Cargo;

use App\Http\Requests\Admin\CargoStoreRequest;
use App\Http\Requests\Admin\CargoUpdateRequest;
use App\Http\Requests\Admin\CargoDestroyRequest;

class CargoController extends Controller
{
    public function __construct(
        CargoRepository $cargoRepository,
        CargoSimboloRepository $cargoSimboloRepository
    )
    {
        $this->authorizeResource(Cargo::class, 'cargo');
        $this->cargoRepository = $cargoRepository;
        $this->cargoSimboloRepository = $cargoSimboloRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (count($request->all()) > 0) {
            $cargos = $this->cargoRepository->paginateWhere(10, 'nome', 'ASC', $request->except(['_token', 'page']));
        } else {
            $cargos = $this->cargoRepository->paginate(10, 'nome');
        }

        return view('admin.cargos.index', [
            'cargos' => $cargos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cargos.create', [
            'simbolos' => $this->cargoSimboloRepository->selectOption()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CargoStoreRequest $request)
    {
        $result = $this->cargoRepository->store($request->except(['_token']));

        if ($result === true) {
            flash('Cargo cadastrado com sucesso!')->success();

            return redirect()->route('admin.cargos.index');
        }

        flash('Erro ao cadastrar o cargo! '.$result)->error();

        return redirect()->route('admin.cargos.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo $cargo)
    {
        return view('admin.cargos.show', [
            'cargo' => $cargo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('admin.cargos.edit', [
            'cargo' => $cargo,
            'simbolos' => $this->cargoSimboloRepository->selectOption()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CargoUpdateRequest $request, Cargo $cargo)
    {
        $result = $this->cargoRepository->update($cargo, $request->except(['_token']));

        if ($result === true) {
            flash('Cargo atualizado com sucesso!')->success();

            return redirect()->route('admin.cargos.index');
        }

        flash('Erro ao atualizar o cargo! '.$result)->error();

        return redirect()->route('admin.cargos.edit', [
            'cargo' => $cargo
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CargoDestroyRequest $request, Cargo $cargo)
    {
        $result = $this->cargoRepository->destroy($cargo);

        if ($result === true) {
            flash('Cargo apagado com sucesso!')->success();

            return redirect()->route('admin.cargos.index');
        }

        flash('Erro ao deletar o cargo! '.$result)->error();

        return redirect()->route('admin.cargos.show', [
            'cargo' => $cargo
        ]);
    }
}
