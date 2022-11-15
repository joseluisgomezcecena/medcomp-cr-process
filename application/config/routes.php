<?php
//EN300
//validation assesment with ismael.
//security for  github.
//flowcharts for each program.
//talk if its in the quality system.


defined('BASEPATH') OR exit('No direct script access allowed');

$route['admins'] = 'admins/index';

$route['requests'] = 'requests/index';
$route['requests/create/(:any)'] = 'requests/create/$1';
$route['requests/new'] = 'requests/new';



$route['login'] = 'auth/login';
$route['testmail'] = 'emails/sendmail';


$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


