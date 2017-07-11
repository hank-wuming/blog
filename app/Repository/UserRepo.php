<?php
namespace App\Repository;

use App\Contracts\Repository\UserRepoContract;
use App\Contracts\Entity\User as UserContract;
use App\Eloquent\User;

class UserRepo implements UserRepoContract
{
    public function all()
    {
        return User::all();
    }

    /**
     * @param int $id
     *
     * @return UserContract
     */
    public function find(int $id): UserContract
    {
        return User::find($id);
    }
}
