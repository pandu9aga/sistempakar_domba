<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['home']='Halaman/view';
$route['landing'] = 'Konsultasi_control/landing';
$route['konsultasi'] = 'Konsultasi_control/pertanyaan';
$route['cetak/(:any)'] = 'Konsultasi_control/cetak/$1';
$route['hasil_diagnosis/(:any)'] = 'Konsultasi_control/hasil_diagnosis/$1';
//$route['pertanyaan/(:any)'] = 'Konsultasi_control/pertanyaan/$1';
//$route['konsultasi/(:any)'] = 'Konsultasi_control/konsultasi/$1';
$route['tips'] = 'Konsultasi_control/tips';
$route['petunjuk'] = 'Konsultasi_control/petunjuk';
$route['tentang'] = 'Konsultasi_control/tentang';
$route['default_controller'] ='Konsultasi_control/landing';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['cek/(:any)']='Konsultasi_control/cek_diag/$1';
