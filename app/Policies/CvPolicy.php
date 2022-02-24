<?php

namespace App\Policies;

use App\Models\Cv;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;


class CvPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability){
        //t9dar thayed ladmin action dyal delte a partire men variable $ability if(Auth::user()->is_admin and $ability!='delete')
        if($user->is_admin and $ability != 'delete'){
            return true;
        }
    }

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
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Cv $cv)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Cv $cv)
    {
        return $user->id === $cv->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Cv $cv)
    {
        return $user->id === $cv->user_id;

    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Cv $cv)
    {
        return $user->id === $cv->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Cv $cv)
    {
        return $user->id === $cv->user_id;
    }
}
