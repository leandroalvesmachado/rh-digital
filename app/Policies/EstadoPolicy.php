<?php

namespace App\Policies;

use App\Models\Estado;
use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class EstadoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Usuario $usuario, Estado $estado)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Usuario $usuario, Estado $estado)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Usuario $usuario, Estado $estado)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Usuario $usuario, Estado $estado)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Estado  $estado
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Usuario $usuario, Estado $estado)
    {
        //
    }
}
