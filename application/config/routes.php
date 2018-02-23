<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// admin_controller routes
$route['loginAuth'] = 'login/loginAuth';
$route['logout'] = 'login/logout';

//reserved routes
$route['default_controller'] = 'admin_controller/';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
