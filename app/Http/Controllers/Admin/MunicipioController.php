<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\MunicipioRepository;
use App\Repositories\EstadoRepository;

use App\Models\Municipio;

use App\Http\Requests\Admin\MunicipioStoreRequest;
use App\Http\Requests\Admin\MunicipioUpdateRequest;

class MunicipioController extends Controller
{
    public function __construct(
        MunicipioRepository $municipioRepository,
        EstadoRepository $estadoRepository
    )
    {
        $this->authorizeResource(Municipio::class, 'estado');
        $this->municipioRepository = $municipioRepository;
        $this->estadoRepository = $estadoRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (count($request->all()) > 0) {
            $municipios = $this->municipioRepository->paginateWhere(10, 'nome', 'ASC', $request->except(['_token', 'page']));
        } else {
            $municipios = $this->municipioRepository->paginate(10, 'nome');
        }

        return view('admin.municipios.index', [
            'municipios' => $municipios,
            'estados' => $this->estadoRepository->selectOption()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.municipios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MunicipioStoreRequest $request)
    {
        $result = $this->municipioRepository->store($request->except(['_token']));

        if ($result === true) {
            flash('Município cadastrado com sucesso!')->success();

            return redirect()->route('admin.municipios.index');
        }

        flash('Erro ao cadastrar o município! '.$result)->error();

        return redirect()->route('admin.municipios.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Municipio $municipio)
    {
        return view('admin.municipios.show', [
            'municipio' => $municipio
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Municipio $municipio)
    {
        return view('admin.municipios.edit', [
            'municipio' => $municipio
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MunicipioUpdateRequest $request, Municipio $municipio)
    {
        $result = $this->municipioRepository->update($municipio, $request->except(['_token']));

        if ($result === true) {
            flash('Município atualizado com sucesso!')->success();

            return redirect()->route('admin.municipios.index');
        }

        flash('Erro ao atualizar o município! '.$result)->error();

        return redirect()->route('admin.municipios.edit', [
            'municipio' => $municipio
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
