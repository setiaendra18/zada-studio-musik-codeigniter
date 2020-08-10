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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin'] = 'admin/login';
$route['admin/dashboard'] = 'admin/dashboard';

$route['admin/studio/v_studio'] = 'admin/studio';
$route['admin/studio/v_studio_tambah'] = 'admin/studio/tambah';
$route['admin/studio/v_studio_edit'] = 'admin/studio/edit';

$route['admin/jam/v_jam'] = 'admin/jam';
$route['admin/jam/v_jam_tambah'] = 'admin/jam/tambah';
$route['admin/jam/v_jam_edit'] = 'admin/jam/edit';

$route['admin/jam/v_transaksi'] = 'admin/transaksi';
$route['admin/jam/v_transaksi_edit'] = 'admin/transaksi/edit';

$route['admin/pembayaran/v_bayar'] = 'admin/pembayaran';
$route['admin/pembayaran/v_bayar_edit'] = 'admin/pembayaran/edit';


$route['admin/member/v_member'] = 'admin/member';
$route['admin/member/v_member_edit'] = 'admin/member/edit';


$route['admin/member/v_admin'] = 'admin/admin';
$route['admin/member/v_admin_edit'] = 'admin/admin/edit';

$route['admin/laporan/v_laporan'] = 'admin/laporan';


$route['admin/cek_login'] = 'admin/login/cek_login';
