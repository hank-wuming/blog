<?php

namespace App\Facades;

use App\Contracts\Entity\User;
use App\Contracts\Repository\UserRepoContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * Class UserRepo
 *
 * @method static User[]|Collection all();
 * @method static User find(int $id);
 *
 * @author HankChang <hank.chang@hwtrek.com>
 */
class UserRepo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return UserRepoContract::class;
    }
}
