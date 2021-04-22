<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home_pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Home_pages/login';
$route['register'] = 'Home_pages/register';
$route['logout'] = 'Home_pages/logout';

$route['dashboard'] = 'dashboard';

$route['Users/show/(:any)'] = 'Users/show/$1';
$route['Users/edit/(:any)'] = 'Users/edit/$1';
$route['Users/remove/(:any)'] = 'Users/remove/$1';
