<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home_pages';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['signin'] = 'Home_pages/signin';
$route['register'] = 'Home_pages/register';
