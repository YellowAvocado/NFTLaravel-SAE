<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function index(User $user)
    {
        return $user->email ==='admin@nft.com';
    }
/*
    public function create(User $user)
    {
        return $user->email ==='admin@nft.com';
    }

    public function update(User $user)
    {
        return $user->email === 'admin@nft.com';
    }*/
}
