<?php

namespace App\Eloquent;

use App\Contracts\Entity\User as UserEntity;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Eloquent;

/**
 * App\Eloquent\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Eloquent\User whereUpdatedAt($value)
 */
class User extends Eloquent implements
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
     * @inheritDoc
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function createdAt(): \DateTime
    {
        return new \DateTime($this->created_at);
    }

    /**
     * @inheritDoc
     */
    public function updatedAt(): \DateTime
    {
        return new \DateTime($this->updated_at);
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name): UserEntity
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setEmail(string $email): UserEntity
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setPassword(string $password): UserEntity
    {
        $this->password = bcrypt($password);

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function save(array $options = []): bool
    {
        return parent::save($options);
    }
}
