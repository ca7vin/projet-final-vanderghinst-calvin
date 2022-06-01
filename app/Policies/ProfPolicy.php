<?php

namespace App\Policies;

use App\Models\Prof;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class ProfPolicy
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
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Prof $prof)
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
        $user->role_id === 1;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user)
    {
        if (Auth::user()->role_id === 1) {
            return $user->role_id === 1;
        } elseif (Auth::user()->role_id === 2) {
            return $user->role_id === 2 && $user->prof->id === $prof->id;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Prof $prof)
    {
        if (Auth::user()->role_id === 1) {
            return $user->role_id === 1;
        } elseif (Auth::user()->role_id === 2) {
            return $user->role_id === 2 && $user->prof_id === $prof->id;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Prof $prof)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Prof  $prof
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Prof $prof)
    {
        //
    }
}
