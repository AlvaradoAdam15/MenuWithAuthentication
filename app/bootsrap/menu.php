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
MenuWithAuthentication::menu()
    ->title('Home')
    ->icon('fa-dashboard')
    ->url('/home')
    ->rol('home')
    ->permission('home')
    ->user('adamalvarado');
//Another link
MenuWithAuthentication::menu()
    ->title('Another link')
    ->user(5);
;
//Multilevel
MenuWithAuthentication::menu()->title('Multilevel')->icon('fa-credit-card');
MenuWithAuthentication::menu()->title('Link in level 2')->icon('fa-briefcase');
MenuWithAuthentication::menu()->title('Link in level 2')->icon('fa-user');
MenuWithAuthentication::menu()
    ->title('Últim menú')
    ->icon('fa-dashboard')
    ->url('http://www.google.com');