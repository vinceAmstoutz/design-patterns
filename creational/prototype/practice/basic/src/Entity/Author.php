<?php

declare(strict_types=1);

namespace App\Entity;

use App\Entity\Page;

class Author
{
    public function __construct(
        private string $firstName,
        private string $lastName,
        private string $pseudo
    ) {
    }

    /**
     * Relation represented by an array of Page objects 
     *
     * @var array
     */
    private array $pages = [];

    public function addPage(Page $page): Author
    {
        $this->pages[] = $page;
        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function getPages(): array
    {
        return $this->pages;
    }
}
