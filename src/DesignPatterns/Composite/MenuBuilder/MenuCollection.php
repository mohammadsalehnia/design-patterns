<?php

namespace Src\DesignPatterns\Composite\MenuBuilder;

class MenuCollection implements MenuComponent
{
    private $menuItems = [];

    public function add(MenuComponent $component)
    {
        $this->menuItems [] = $component;
    }


    public function build()
    {
        echo '<div class="menu">';
        foreach ($this->menuItems as $item)
        {
            $item->build();
        }
        echo '</div>';
    }
}
