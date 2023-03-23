<?php

namespace App\Policies;

use App\Models\ProfilPerusahaan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProfilPerusahaanPolicy
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
     * @param  \App\Models\ProfilPerusahaan  $profilPerusahaan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ProfilPerusahaan $profilPerusahaan)
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
     * @param  \App\Models\ProfilPerusahaan  $profilPerusahaan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ProfilPerusahaan $profilPerusahaan)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfilPerusahaan  $profilPerusahaan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ProfilPerusahaan $profilPerusahaan)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfilPerusahaan  $profilPerusahaan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ProfilPerusahaan $profilPerusahaan)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ProfilPerusahaan  $profilPerusahaan
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ProfilPerusahaan $profilPerusahaan)
    {
        //
    }
}
