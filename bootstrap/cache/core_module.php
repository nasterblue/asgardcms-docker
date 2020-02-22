<?php return array (
  'providers' => 
  array (
    0 => 'Modules\\Core\\Providers\\CoreServiceProvider',
    1 => 'Modules\\Core\\Providers\\SidebarServiceProvider',
    2 => 'Modules\\Core\\Providers\\AssetServiceProvider',
    3 => 'FloatingPoint\\Stylist\\StylistServiceProvider',
    4 => 'Maatwebsite\\Sidebar\\SidebarServiceProvider',
  ),
  'eager' => 
  array (
    0 => 'Modules\\Core\\Providers\\CoreServiceProvider',
    1 => 'Modules\\Core\\Providers\\AssetServiceProvider',
    2 => 'FloatingPoint\\Stylist\\StylistServiceProvider',
    3 => 'Maatwebsite\\Sidebar\\SidebarServiceProvider',
  ),
  'deferred' => 
  array (
  ),
  'when' => 
  array (
    'Modules\\Core\\Providers\\SidebarServiceProvider' => 
    array (
    ),
  ),
);