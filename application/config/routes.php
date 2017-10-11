<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['admin'] = 'C_admin/index';
$route['admin/login'] = 'C_admin/login';
$route['admin/logout'] = 'C_admin/logout';
$route['admin/tabel/dosen'] = 'C_admin/tabelDosen';
$route['admin/tabel/matakuliah'] = 'C_admin/tabelMataKuliah';
$route['admin/tabel/kelas'] = 'C_admin/tabelDosen';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
