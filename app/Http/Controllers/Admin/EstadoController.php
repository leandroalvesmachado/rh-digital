<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\EstadoRepository;

use App\Models\Estado;

use App\Http\Requests\Admin\EstadoStoreRequest;
use App\Http\Requests\Admin\EstadoUpdateRequest;

class EstadoController extends Controller
{
    public function __construct(EstadoRepository $estadoRepository)
    {
        $this->authorizeResource(Estado::class, 'estado');
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
            $estados = $this->estadoRepository->paginateWhere(10, 'nome', 'ASC', $request->except(['_token', 'page']));
        } else {
            $estados = $this->estadoRepository->paginate(10, 'nome');
        }

        return view('admin.estados.index', [
            'estados' => $estados
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadoStoreRequest $request)
    {
        $result = $this->estadoRepository->store($request->except(['_token']));

        if ($result === true) {
            flash('Estado cadastrado com sucesso!')->success();

            return redirect()->route('admin.estados.index');
        }

        flash('Erro ao cadastrar o estado! '.$result)->error();

        return redirect()->route('admin.estados.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return view('admin.estados.show', [
            'estado' => $estado
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('admin.estados.edit', [
            'estado' => $estado
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstadoUpdateRequest $request, Estado $estado)
    {
        $result = $this->estadoRepository->update($estado, $request->except(['_token']));

        if ($result === true) {
            flash('Estado atualizado com sucesso!')->success();

            return redirect()->route('admin.estados.index');
        }

        flash('Erro ao atualizar o estado! '.$result)->error();

        return redirect()->route('admin.estados.edit', [
            'estado' => $estado
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
