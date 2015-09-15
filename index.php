<?php

include("class_definition.php");

$fooObj = new Foo(1, "abc", 1.2345);

echo "<head>";
echo "  <title>Quick Rebuild of var_export() using set_state()</title>";
echo "</head>";

echo "<body>";
echo "  <p>Initial construction of \$fooObj</p>";
echo "  <pre>";
print_r($fooObj);
echo "  </pre>";
echo "  <p>Textarea containing the var_dump() information of \$fooObj for form submit:</p>";
echo "  <form action='rebuild_class.php' method='POST'>";
echo "      <textarea name='foo-dump' rows=5 cols=40>";
var_export($fooObj);
echo "      </textarea>";
echo "      <input type='submit' value='Submit'>";
echo "  </form>";
echo "</body>";

?>
