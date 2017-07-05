<?php
namespace App\Repository;

use App\Contracts\Repository\UserRepoContract;
use App\Eloquent\User;

class UserRepo implements UserRepoContract
{
    public function all()
    {
        return User::all();
    }
}
