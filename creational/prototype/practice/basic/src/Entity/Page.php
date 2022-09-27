<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;

class Page
{

    private string $title;

    private string $body;

    private array $comments = [];

    private Author $author;

    private DateTime $date;

    public function __construct(
        string $title,
        string $body,
        Author $author,
    ) {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addPage($this); //Add the page to the author
        $this->date = new \DateTime();
    }

    /**
     * Called when a Page object is cloned (using PHP clone keyword) 
     *
     * @return void
     */
    public function __clone(): void
    {
        $this->title = 'Copy of ' . $this->title;
        $this->author->addPage($this);
        $this->comments = []; //irrelevant to copy the related comments when we creates a new Page
        $this->date = new \DateTime();
    }

    /**
     * Adding a comment to a page
     * 
     * @param string $comment comment body
     * @return Page
     */
    public function addComment(string $comment): Page
    {
        $this->comments[] = $comment;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }

    public function getComments(): array
    {
        return $this->comments;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }
}
