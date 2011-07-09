<html><body><pre>

<?php

echo "integer generator\n";
require_once dirname(__FILE__) . '/Generator/Integer.php';
$g = new \RndOrg\Generator\Integer();
var_dump( $g->get() );
echo "\n\n";

echo "sequence generator\n";
require_once dirname(__FILE__) . '/Generator/Sequence.php';
$g = new \RndOrg\Generator\Sequence();
var_dump( $g->get() );
echo "\n\n";

?>

</pre></body></html>