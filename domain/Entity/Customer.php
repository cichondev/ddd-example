<?php

namespace Domain\Entity;

use Carbon\Carbon;
use Domain\ValueObject\Email;

/**
 * Class Customer
 * @package Domain\Entity
 */
class Customer
{
    /**
     * @var int $id
     */
    private $id;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var Email $email
     */
    private $email;

    /**
     * @var bool $active
     */
    private $active;

    /**
     * @var Carbon $last_access
     */
    private $last_access;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * @param Email $email
     */
    public function setEmail(Email $email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    /**
     * @return Carbon
     */
    public function getLastAccess(): Carbon
    {
        return $this->last_access;
    }

    /**
     * @param Carbon $last_access
     */
    public function setLastAccess(Carbon $last_access)
    {
        $this->last_access = $last_access;
    }
}
