<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//dasboard routes
$route['create'] = 'dashboard/createSurvey';
$route['mysurvey'] = 'dashboard/mySurvey';

// admin_controller routes
$route['logout'] = 'admin_controller/logout';
$route['login'] = 'admin_controller/loginAuth';
$route['dashboard'] = 'admin_controller/dashboard';

//reserved routes
$route['default_controller'] = 'admin_controller/dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
