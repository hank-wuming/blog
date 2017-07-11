<?php
namespace App\Contracts\Entity;

interface Entity
{
    /**
     * @return int
     */
    public function id(): int;

    /**
     * @param array $options
     *
     * @return bool
     */
    public function save(array $options = []): bool;
}
