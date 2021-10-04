<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Repositories\UsuarioRepository;

use App\Models\Usuario;

use App\Http\Requests\Admin\StoreUsuarioRequest;
use App\Http\Requests\Admin\UpdateUsuarioRequest;
use App\Http\Requests\Admin\DestroyUsuarioRequest;

class UsuarioController extends Controller
{
    public function __construct(
        UsuarioRepository $usuarioRepository
    )
    {
        $this->authorizeResource(Usuario::class, 'usuario');
        $this->usuarioRepository = $usuarioRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (count($request->all()) > 0) {
            $usuarios = $this->usuarioRepository->paginateWhere(10, 'name', 'ASC', $request->except(['_token', 'page']));
        } else {
            $usuarios = $this->usuarioRepository->paginate(10, 'name');
        }

        return view('admin.usuarios.index', [
            'usuarios' => $usuarios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarioRequest $request)
    {
        $result = $this->usuarioRepository->store($request->except(['_token']));

        if ($result === true) {
            flash('Usuário cadastrado com sucesso!')->success();

            return redirect()->route('admin.usuarios.index');
        }

        flash('Erro ao cadastrar o usuário! '.$result)->error();

        return redirect()->route('admin.usuarios.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        return view('admin.usuarios.show', [
            'usuario' => $usuario
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('admin.usuarios.edit', [
            'usuario' => $usuario
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUsuarioRequest $request, Usuario $usuario)
    {
        $result = $this->usuarioRepository->update($usuario, $request->except(['_token']));

        if ($result === true) {
            flash('Usuário atualizado com sucesso!')->success();

            return redirect()->route('admin.usuarios.index');
        }

        flash('Erro ao atualizar o usuário! '.$result)->error();

        return redirect()->route('admin.usuarios.edit', [
            'usuario' => $usuario
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyUsuarioRequest $request, Usuario $usuario)
    {
        $result = $this->usuarioRepository->destroy($usuario);

        if ($result === true) {
            flash('Usuário apagado com sucesso!')->success();

            return redirect()->route('admin.usuarios.index');
        }

        flash('Erro ao deletar o usuário! '.$result)->error();

        return redirect()->route('admin.usuarios.show', [
            'usuario' => $usuario
        ]);
    }
}
