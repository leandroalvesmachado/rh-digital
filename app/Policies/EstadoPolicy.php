<?php

namespace App\Policies;

use App\Models\Estado;
use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

use Exception;

class EstadoPolicy
{
    use HandlesAuthorization;

    // Controller Method	Policy Method
    // index	            viewAny
    // show	                view
    // create	            create
    // store	            create
    // edit	                update
    // update	            update
    // destroy	            delete

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(Usuario $usuario)
    {
        return true;
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
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(Usuario $usuario)
    {
        try {
            return $usuario->isAdmin() ? true : false;
        } catch (Exception $e) {
            return false;
        }
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
        try {
            return $usuario->isAdmin() ? true : false;
        } catch (Exception $e) {
            return false;
        }
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
        try {
            return $usuario->isAdmin() ? true : false;
        } catch (Exception $e) {
            return false;
        }
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
        return false;
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
        return false;
    }
}
