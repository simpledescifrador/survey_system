<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//PORJECT ROUTES
$route['project/create'] = 'project/createBlankProject'; 
$route['project/delete/(:num)'] = 'project/deleteSurvey/$1';
$route['project/edit/(:num)'] = 'project/editSurvey/$1'; 
// admin_controller routes
$route['loginAuth'] = 'login/loginAuth';
$route['logout'] = 'login/logout';

//reserved routes
$route['default_controller'] = 'admin_controller/';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
