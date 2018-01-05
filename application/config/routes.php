<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| 
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'error';
$route['translate_uri_dashes'] = FALSE;


// About Us
$route['about_us'] = 'home/about_us';


// Portfolio
$route['portfolio'] = 'home/portfolio';


// Shop
$route['shop'] = 'home/shop';


// Blog
$route['blog'] = 'home/blog';


// Contact Us
$route['contact_us'] = 'home/contact_us';