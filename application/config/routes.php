<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['logout'] = 'admin_controller/logout';
$route['login'] = 'admin_controller/loginAuth'; 
$route['default_controller'] = 'admin_controller/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
