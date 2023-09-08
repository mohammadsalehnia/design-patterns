<?php

namespace Src\DesignPatterns\Composite\MenuBuilder;

class MenuItem implements MenuComponent
{
    private $title;
    private $url;

    /**
     * @param $title
     * @param $url
     */
    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }


    public function build()
    {
        echo "<a href='{$this->url}'>{$this->title}</a>";
    }
}
