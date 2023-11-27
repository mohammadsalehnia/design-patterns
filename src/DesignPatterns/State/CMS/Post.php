<?php

namespace Src\DesignPatterns\State\CMS;

use Src\DesignPatterns\State\CMS\PostStatuses\DraftStatus;

class Post
{
    private $title;
    private $content;
    private PostStatus $status;

    /**
     * @param $title
     * @param $content
     */
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
        $this->transitionTo(new DraftStatus());
    }

    public function transitionTo(PostStatus $status)
    {
        $this->status = $status;
        $this->status->setPost($this);
    }

    public function draft(): void
    {
        $this->status->draft();
    }

    public function moderation(): void
    {
        $this->status->moderation();
    }


    public function publish(): void
    {
        $this->status->published();
    }


}
