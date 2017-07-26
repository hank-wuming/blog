<?php

namespace App\Eloquent;

use App\Contracts\Entity\User as UserEntity;
use App\Eloquent\User as UserEloquent;
use Illuminate\Database\Eloquent\Builder;
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
 * @method static Builder|UserEloquent whereCreatedAt($value)
 * @method static Builder|UserEloquent whereEmail($value)
 * @method static Builder|UserEloquent whereId($value)
 * @method static Builder|UserEloquent whereName($value)
 * @method static Builder|UserEloquent wherePassword($value)
 * @method static Builder|UserEloquent whereRememberToken($value)
 * @method static Builder|UserEloquent whereUpdatedAt($value)
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
    public function getName(): string
    {
        return $this->name;
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
    public function getEmail(): string
    {
        return $this->email;
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
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @inheritDoc
     */
    public function save(array $options = []): bool
    {
        return parent::save($options);
    }
}
