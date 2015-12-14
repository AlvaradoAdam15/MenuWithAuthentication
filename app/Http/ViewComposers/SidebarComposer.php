<?php

namespace MenuWithAuthentication\Http\ViewComposers;

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 14/12/15
 * Time: 17:10
 */
use Illuminate\Contracts\View\View;

/**
 * Class SidebarComposer
 */
class SidebarComposer
{
    public function compose(View $view)
    {
        $view->with('menu',$this->getSidebarMenu());
    }

    private function getSidebarMenu()
    {
     $menu = MenuWithAuthentication::instance()->getMenu();
     return array();
    }
}