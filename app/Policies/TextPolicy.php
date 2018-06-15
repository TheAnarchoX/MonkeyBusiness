<?php

namespace App\Policies;

use App\User;
use App\Text;
use Illuminate\Auth\Access\HandlesAuthorization;

class TextPolicy
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
     * Determine whether the user can view the text.
     *
     * @return mixed
     */
    public function view()
    {
        return true;
    }

    /**
     * Determine whether the user can create texts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the text.
     *
     * @param  \App\User  $user
     * @param  \App\Text  $text
     * @return mixed
     */
    public function update(User $user, Text $text)
    {
        return $user->id == $text->author || $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the text.
     *
     * @param  \App\User  $user
     * @param  \App\Text  $text
     * @return mixed
     */
    public function delete(User $user, Text $text)
    {
        return $user->id == $text->author;
    }
}
