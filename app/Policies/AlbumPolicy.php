<?php

namespace App\Policies;

use App\User;
use App\Album;
use Illuminate\Auth\Access\HandlesAuthorization;

class AlbumPolicy
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
     * Determine whether the user can view the album.
     *
     * @return mixed
     */
    public function view(User $user)
    {
        return $user->isContributor();
    }

    /**
     * Determine whether the user can create albums.
     *
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isContributor();
    }

    /**
     * Determine whether the user can update the album.
     *
     * @param  \App\User  $user
     * @param  \App\Album  $album
     * @return mixed
     */
    public function update(User $user, Album $album)
    {
        return $user->id == $album->author || $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the album.
     *
     * @param  \App\User  $user
     * @param  \App\Album  $album
     * @return mixed
     */
    public function delete(User $user, Album $album)
    {
        return $user->id == $album->author || $user->isAdmin();
    }
}
