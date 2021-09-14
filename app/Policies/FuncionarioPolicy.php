<?php

namespace App\Policies;

use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class FuncionarioPolicy
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
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(Usuario $usuario, Funcionario $funcionario)
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
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(Usuario $usuario, Funcionario $funcionario)
    {
        try {
            return ($usuario->isAdmin() || $usuario->id === $funcionario->usuario_id) ? true : false;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(Usuario $usuario, Funcionario $funcionario)
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
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(Usuario $usuario, Funcionario $funcionario)
    {
        try {
            return $usuario->isAdmin() ? true : false;
        } catch (Exception $e) {
            return false;
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Usuario  $usuario
     * @param  \App\Models\Funcionario  $funcionario
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(Usuario $usuario, Funcionario $funcionario)
    {
        return false;
    }
}
