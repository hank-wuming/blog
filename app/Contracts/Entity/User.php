<?php
namespace App\Contracts\Entity;

interface User
{
    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return \DateTime
     */
    public function createdAt(): \DateTime;

    /**
     * @return \DateTime
     */
    public function updatedAt(): \DateTime;
}