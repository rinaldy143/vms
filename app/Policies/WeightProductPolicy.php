<?php

namespace App\Policies;

use App\Models\Entity\User;
use App\Models\Entity\WeightProduct;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;


class WeightProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\Entity\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->role == 'ADMIN';
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\Entity\User  $user
     * @param  \App\Models\WeightProduct  $weightProduct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, WeightProduct $weightProduct)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\Entity\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\Entity\User  $user
     * @param  \App\Models\WeightProduct  $weightProduct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, WeightProduct $weightProduct)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\Entity\User  $user
     * @param  \App\Models\WeightProduct  $weightProduct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, WeightProduct $weightProduct)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\Entity\User  $user
     * @param  \App\Models\WeightProduct  $weightProduct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, WeightProduct $weightProduct)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\Entity\User  $user
     * @param  \App\Models\WeightProduct  $weightProduct
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, WeightProduct $weightProduct)
    {
        //
    }
}
