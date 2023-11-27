<?php

namespace Src\DesignPatterns\State\CMS\PostStatuses;

use Src\DesignPatterns\State\CMS\Exceptions\InvalidStatusException;
use Src\DesignPatterns\State\CMS\PostStatus;

class PublishedStatus extends PostStatus
{

    public function draft()
    {
        $this->post->transitionTo(new DraftStatus());
    }

    public function moderation()
    {
        throw new InvalidStatusException('Published post cant moderate');
    }

    public function published()
    {
        throw new InvalidStatusException('Published post cant published again');
    }
}
