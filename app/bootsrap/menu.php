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
MenuWithAuthentication::menu()->title('Home')->icon('fa-dashboard');
//Another link
MenuWithAuthentication::menu()
    ->title('Anhother Link')
    ->user(5);

//Multilevel
MenuWithAuthentication::menu()->title('Multilevel')->icon('fa-credit-card');
    MenuWithAuthentication::menu()->title('Link in leavel 1')->icon('fa-briefcase');
    MenuWithAuthentication::menu()->title('Link in leavel 2')->icon('fa-user');

MenuWithAuthentication::menu()
    ->title('Ultom menú')
    ->icon('fa-dashboard')
    ->url('http://www.google.com')
    ->rol('home')
    ->permission('home');