<?php

namespace MenuWithAuthentication\Http\ViewComposers;

/**
 * Created by PhpStorm.
 * User: adam
 * Date: 14/12/15
 * Time: 17:10
 */
use Illuminate\Contracts\View\View;
use MenuWithAuthentication\MenuWithAuthentication;

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

        return array();
//     $menu =
//         MenuWithAuthentication::instance(1)
//             ->getMenu();
//     return array($menu);
    }


}