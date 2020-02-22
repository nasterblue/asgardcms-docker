<?php return array (
  'providers' => 
  array (
    0 => 'Modules\\Menu\\Providers\\RouteServiceProvider',
    1 => 'Modules\\Menu\\Providers\\MenuServiceProvider',
    2 => 'Modules\\Menu\\Providers\\EventServiceProvider',
    3 => 'Nwidart\\Menus\\MenusServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Modules\\Menu\\Providers\\RouteServiceProvider',
    1 => 'Modules\\Menu\\Providers\\MenuServiceProvider',
    2 => 'Modules\\Menu\\Providers\\EventServiceProvider',
  ),
  'deferred' => 
  array (
    'menus' => 'Nwidart\\Menus\\MenusServiceProvider',
  ),
  'when' => 
  array (
    'Nwidart\\Menus\\MenusServiceProvider' => 
    array (
    ),
  ),
);