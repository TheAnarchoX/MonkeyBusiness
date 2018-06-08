<?php

namespace App\Policies;

use App\User;
use App\Partner;
use Illuminate\Auth\Access\HandlesAuthorization;

class PartnerPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     *
     * @return bool
     */
    public function before(User $user) {
        return $user->isSuperAdmin();
    }

    /**
     * Determine whether the user can view the partner.
     *
     * @return mixed
     */
    public function view()
    {
        return true;
    }

    /**
     * Determine whether the user can create partners.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the partner.
     *
     * @param  \App\User  $user
     * @param  \App\Partner  $partner
     * @return mixed
     */
    public function update(User $user, Partner $partner)
    {
        return $user->id == $partner->author;
    }

    /**
     * Determine whether the user can delete the partner.
     *
     * @param  \App\User  $user
     * @param  \App\Partner  $partner
     * @return mixed
     */
    public function delete(User $user, Partner $partner)
    {
        return $user->id == $partner->author;
    }
}
