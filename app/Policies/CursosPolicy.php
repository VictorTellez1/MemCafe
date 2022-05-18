<?php

namespace App\Policies;

use App\Models\Cursos;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CursosPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Cursos $cursos)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Cursos $cursos)
    {
        //Revisa si el usuario autenticado es el mismo que creo el curso
        return $user->id===$cursos->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Cursos $cursos)
    {
        return $user->id===$cursos->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Cursos $cursos)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cursos  $cursos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Cursos $cursos)
    {
        //
    }
}
