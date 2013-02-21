<?php

require __DIR__ . '/vendor/autoload.php';

?>


<html><body><pre>
<?php

echo "integer generator\n";
$g = new \RndOrg\Generator\Integer();
var_dump( $g->get() );
echo "\n\n";

echo "sequence generator\n";
$g = new \RndOrg\Generator\Sequence();
var_dump( $g->get() );
echo "\n\n";

?>

</pre></body></html>