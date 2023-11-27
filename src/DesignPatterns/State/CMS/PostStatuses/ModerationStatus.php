<?php

namespace Src\DesignPatterns\State\CMS\PostStatuses;

use Src\DesignPatterns\State\CMS\PostStatus;

class ModerationStatus extends PostStatus
{

    public function draft()
    {
        $this->post->transitionTo(new DraftStatus());
    }

    public function moderation()
    {
        $this->post->transitionTo(new ModerationStatus());
    }

    public function published()
    {
        $this->post->transitionTo(new PublishedStatus());
    }
}
