<?php

namespace App\Policies;

use App\Models\Experience;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ExperiencePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->type === User::TYPE_ADMIN || $user->type === User::TYPE_VENDOR;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Experience $experience
     * @return Response|bool
     */
    public function view(User $user, Experience $experience)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Experience $experience
     * @return Response|bool
     */
    public function update(User $user, Experience $experience)
    {
        return $user->type === User::TYPE_ADMIN || $experience->vendor_id === $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Experience $experience
     * @return Response|bool
     */
    public function delete(User $user, Experience $experience)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Experience $experience
     * @return Response|bool
     */
    public function restore(User $user, Experience $experience)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Experience $experience
     * @return Response|bool
     */
    public function forceDelete(User $user, Experience $experience)
    {
        return false;
    }
}
