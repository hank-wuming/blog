<?php

namespace App\Contracts\Repository;

use App\Contracts\Entity\User;
use Illuminate\Support\Collection;

interface UserRepoContract
{
    /**
     * @return User[]|Collection
     */
    public function all();

    /**
     * @param int $id
     *
     * @return User
     */
    public function find(int $id): User;
}
