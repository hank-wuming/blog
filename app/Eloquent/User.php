<?php

namespace App\Eloquent;

use App\Contracts\Entity\User as UserEntity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * Class User
 *
 * @property mixed id
 * @property mixed created_at
 * @property mixed updated_at
 *
 * @author HankChang <hank.chang@hwtrek.com>
 */
class User extends Model implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract,
    UserEntity
{
    use Authenticatable, Authorizable, CanResetPassword, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    public function createdAt(): \DateTime
    {
        return new \DateTime($this->created_at);
    }

    public function updatedAt(): \DateTime
    {
        return new \DateTime($this->updated_at);
    }
}
