<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['home']='Halaman/view';
//$route['homes']='Halaman/homes';
//$route['landing'] = 'Konsultasi_control/landing';
$route['konsultasi'] = 'Konsultasi_control/pertanyaan';
$route['cetak/(:any)'] = 'Konsultasi_control/cetak/$1';
$route['hasil_diagnosis/(:any)'] = 'Konsultasi_control/hasil_diagnosis/$1';
$route['api_pertanyaan'] = 'Konsultasi_control/api_pertanyaan';
$route['api_rule'] = 'Konsultasi_control/api_rule';
//$route['pertanyaan/(:any)'] = 'Konsultasi_control/pertanyaan/$1';
//$route['konsultasi/(:any)'] = 'Konsultasi_control/konsultasi/$1';
$route['tips'] = 'Tips/index';
$route['petunjuk'] = 'Petunjuk/index';
$route['tentang'] = 'Tentang/index';
$route['default_controller'] ='Halaman/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['cek/(:any)']='Konsultasi_control/cek_diag/$1';
