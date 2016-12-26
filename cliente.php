<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once('lib/nusoap.php');
$cliente = new nusoap_client('http://disastercode.com.es/ws/servicio.php');
$resultado = $cliente->call('calculadora', array('x' => '3','y'=> 4,'operacion'=>'multiplica'));