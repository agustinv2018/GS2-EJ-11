<?php

header('Content-Type: application/json');

require_once 'modelo/demostracion.php';
require_once 'modelo/linea.php';
require_once 'modelo/respuestalinea.php';
require_once 'modelo/tasa.php';
require_once 'modelo/tipolinea.php';


$demo = new Demostracion();
$demo->Codigo = '1';
$demo->Descripcion = 'DNI';

$tl = new TipoLinea();
$tl->Codigo = '1';
$tl->Descripcion = 'Convencional';

$ta = new Tasa();
$ta->PlazoDesde = 0;
$ta->PlazoHasta = 48;
$ta->Tem = 4.7671;
$ta->Tna = 58;
$ta->ListTasaScore = null;

$li = new Linea();
$li->Id = 222;
$li->Codigo = '752';
$li->Demostracion = $demo;
$li->Linea = 'Linea sin RCI';
$li->RelacionCuotaIngreso = 100;
$li->TipoLinea = $tl;
$li->Tasa = $ta;
$li->Tope = 250000;

$rl = new RespuestaLinea();
$rl->Linea = $li;
$rl->ContieneError = false;
$rl->Mensaje = null;

echo json_encode($rl);