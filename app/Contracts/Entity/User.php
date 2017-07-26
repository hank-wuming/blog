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
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail(string $email): User;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @param string $password
     *
     * @return User
     */
    public function setPassword(string $password): User;

    /**
     * @return string
     */
    public function getPassword(): string;
}
