<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'C_admin/index';
$route['admin/login'] = 'C_admin/login';
$route['admin/logout'] = 'C_admin/logout';
$route['admin/tabel/dosen'] = 'C_admin/tabelDosen';
$route['admin/tabel/matakuliah'] = 'C_admin/tabelMataKuliah';
$route['admin/tabel/matakuliah/create'] = 'C_admin/createMataKuliah';
$route['admin/tabel/matakuliah/edit/(:num)'] = 'C_admin/editMataKuliah/$1';
$route['admin/tabel/matakuliah/delete/(:num)'] = 'C_admin/deleteMataKuliah/$1';
$route['admin/tabel/kelas'] = 'C_admin/tabelDosen';
