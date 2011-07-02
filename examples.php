<?php

//require_once dirname(__FILE__) . '/Generator/Integer.php';
//$g = new \RandomOrg\Generator\Integer();
//var_dump( $g->get() );

require_once dirname(__FILE__) . '/Generator/Sequence.php';
$g = new \RndOrg\Generator\Sequence();
var_dump( $g->get() );