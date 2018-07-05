<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     *
     * @return bool
     */
    public function before(User $user) {

        if($user->isSuperAdmin()){
            return true;
        }

        return null;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User $user
     *
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        if($user->isAdmin()) {
            if($model->isSuperAdmin()) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isSuperAdmin();
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User $user
     *
     * @return mixed
     */
    public function update(User $user, User $model)
    {
        if($user->isAdmin()) {
            if($model->isSuperAdmin()) {
                return false;
            } else {
                return true;
            }
        } elseif($user->isSuperAdmin()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User $user
     *
     * @param \App\User $model
     *
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        return $user->isSuperAdmin() && $user->id != $model->id;
    }
}
