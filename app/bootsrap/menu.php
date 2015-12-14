<?php
/**
 * Created by PhpStorm.
 * User: adam
 * Date: 14/12/15
 * Time: 16:29
 */

//name/title
//url
//Icona
//Té submenus


//Home
MenuWithAuthentication::menu('home')
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('adamalvarado');

//Another link
MenuWithAuthentication::menu('anotlink')
    ->title('Another link')
    ->user(5);


//Multilevel
MenuWithAuthentication::menu('multi')->title('Multilevel')->icon('fa-credit-card');
    MenuWithAuthentication::menu('link2')->title('Link in level 2')->icon('fa-briefcase');
    MenuWithAuthentication::menu('link3')->title('Link in level 2')->icon('fa-user');

MenuWithAuthentication::menu('link4')
    ->title('Últim menú')
    ->icon('fa-dashboard')
    ->url('http://www.google.com');

$menuHome = MenuWithAuthentication::menu('home');