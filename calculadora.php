<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function calculadora ($x,$y,$operacion){
    if($operacion == "suma"){
        return $x = $y;
    } else if($operacion == "resta"){
        return $x - $y;
    } else if($operacion == "multiplica"){
        return $x * $y;
    } else if($operacion == "divide"){
        return $x / $y;
    } else{
        return 0;
    }
}

