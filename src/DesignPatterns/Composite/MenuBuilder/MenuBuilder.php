<?php

namespace Src\DesignPatterns\Composite\MenuBuilder;

class MenuBuilder
{
    public function buildMenu()
    {
        $menuItem1 = new MenuItem('Google', 'https://www.google.com');
        $menuItem2 = new MenuItem('Microsoft', 'https://www.microsoft.com');
        $menuItem3 = new MenuItem('LinkedIn', 'https://www.linkedin.com');

        $mainMenu = new MenuCollection();

        $subMenu = new MenuCollection();
        $subMenu->add($menuItem1);
        $subMenu->add($menuItem2);
        $subMenu->add($menuItem3);

        $mainMenu->add($subMenu);

        $mainMenu->build();
    }
}
