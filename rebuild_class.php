<?php

include("class_definition.php");

eval('$fooObj = '.$_POST['foo-dump'].';');

echo "<head>";
echo "  <title>Rebuilding of var_export()</title>";
echo "</head>";

echo "<body>";
echo "  <p>Reconstructed \$fooObj</p>";
echo "  <pre>";
print_r($fooObj);
echo "  </pre>";
echo "</body>";

?>
