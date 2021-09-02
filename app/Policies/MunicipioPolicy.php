<?php

namespace App\Policies;

use App\Models\Municipio;
use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class MunicipioPolicy
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
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Usuario $usuario, Municipio $municipio)
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
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Usuario $usuario, Municipio $municipio)
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
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Usuario $usuario, Municipio $municipio)
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
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Usuario $usuario, Municipio $municipio)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Municipio  $municipio
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Usuario $usuario, Municipio $municipio)
    {
        return false;
    }
}
