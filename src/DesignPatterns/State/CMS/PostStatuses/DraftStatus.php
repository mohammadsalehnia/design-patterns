<?php

namespace Src\DesignPatterns\State\CMS\PostStatuses;

use Src\DesignPatterns\State\CMS\Exceptions\InvalidStatusException;
use Src\DesignPatterns\State\CMS\PostStatus;

class DraftStatus extends PostStatus
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
        throw new InvalidStatusException('Draft post cant published');
    }
}
