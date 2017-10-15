<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'C_admin/index';
$route['admin/login'] = 'C_admin/login';
$route['admin/logout'] = 'C_admin/logout';
// Dosen
$route['admin/tabel/dosen'] = 'C_admin/tabelDosen';
$route['admin/tabel/dosen/create'] = 'C_admin/createDosen';
$route['admin/tabel/dosen/edit/(:num)'] = 'C_admin/editDosen/$1';
$route['admin/tabel/dosen/delete/(:num)'] = 'C_admin/deleteDosen/$1';
// !!Dosen
// Matkul
$route['admin/tabel/matakuliah'] = 'C_admin/tabelMataKuliah';
$route['admin/tabel/matakuliah/create'] = 'C_admin/createMataKuliah';
$route['admin/tabel/matakuliah/edit/(:num)'] = 'C_admin/editMataKuliah/$1';
$route['admin/tabel/matakuliah/delete/(:num)'] = 'C_admin/deleteMataKuliah/$1';
// !Matkul
// Kelas
$route['admin/tabel/kelas'] = 'C_admin/tabelKelas';
$route['admin/tabel/kelas/create'] = 'C_admin/createKelas';
$route['admin/tabel/kelas/edit/(:num)'] = 'C_admin/editKelas/$1';
$route['admin/tabel/kelas/delete/(:num)'] = 'C_admin/deleteKelas/$1';
// !Kelas
