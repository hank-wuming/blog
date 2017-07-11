<?php
namespace App\Contracts\Entity;

interface User extends Entity
{
    /**
     * @return \DateTime
     */
    public function createdAt(): \DateTime;

    /**
     * @return \DateTime
     */
    public function updatedAt(): \DateTime;

    /**
     * @param string $name
     *
     * @return User
     */
    public function setName(string $name): User;

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail(string $email): User;

    /**
     * @param string $password
     *
     * @return User
     */
    public function setPassword(string $password): User;
}
