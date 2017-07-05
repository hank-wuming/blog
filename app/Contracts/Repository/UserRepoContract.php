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
}
