<?php

namespace Src\DesignPatterns\State\CMS\PostStatuses;

use Src\DesignPatterns\State\CMS\Post;

class Client
{
    public function publishPost()
    {
        $post = new Post('title', 'content');
        $post->publish();
    }

    public function moderatePost()
    {
        $post = new Post('title2', 'content2');
        $post->moderation();
    }
}
