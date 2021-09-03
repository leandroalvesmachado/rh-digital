<?php

namespace App\Policies;

use App\Models\Orgao;
use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrgaoPolicy
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
     * @param  \App\Models\Orgao  $orgao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Usuario $usuario, Orgao $orgao)
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
     * @param  \App\Models\Orgao  $orgao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Usuario $usuario, Orgao $orgao)
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
     * @param  \App\Models\Orgao  $orgao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Usuario $usuario, Orgao $orgao)
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
     * @param  \App\Models\Orgao  $orgao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Usuario $usuario, Orgao $orgao)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Orgao  $orgao
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Usuario $usuario, Orgao $orgao)
    {
        return false;
    }
}
