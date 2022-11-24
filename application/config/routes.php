<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'CampusesController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home'] = 'CampusesController/index';
$route['addcampus'] ='CampusesController/addcampus';
$route['addcampus/submit'] ='CampusesController/submit';
$route['campuses/edit/(:any)'] = 'CampusesController/edit/$1';
$route['campuses/update/(:any)'] = 'CampusesController/update/$1';
$route['campuses/archive/(:any)'] = 'CampusesController/archive/$1';

$route['faculty/(:any)/(:any)'] = "FacultyController/index/$1/$2";
$route['addfaculty/(:any)/(:any)'] = "FacultyController/addfaculty/$1/$2";
$route['savefaculty/(:any)/(:any)'] = "FacultyController/savefaculty/$1/$2";
$route['archivefaculty/(:any)/(:any)/(:any)'] = "FacultyController/archivefaculty/$1/$2/$3";
$route['editfaculty/(:any)'] = 'FacultyController/editfaculty/$1';
$route['updatefaculty/(:any)'] = 'FacultyController/updatefaculty/$1';
$route['showfaculty/(:any)'] = 'FacultyController/showfaculty/$1';

$route['addfile/(:any)'] = 'DocumentController/addfile/$1';
$route['addfile/insertfile/(:any)'] = 'DocumentController/insertfile/$1';
$route['download/(:any)'] = 'DocumentController/downloadfile/$1';
$route['editfile/(:any)'] = 'DocumentController/editfile/$1';
$route['editfile/updatefile/(:any)'] = 'DocumentController/updatefile/$1';
$route['deletefile/(:any)'] = 'DocumentController/deletefile/$1';

//search by
$route['search/author'] = 'SortController/searchbyauthor';
$route['search/faculty'] = 'SortController/searchbyfaculty';
$route['search/dateissued'] = 'SortController/searchdateissued';
