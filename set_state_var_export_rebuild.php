<?php

class Foo
{
    public $bar1;
    public $bar2;
    public $bar3;

    public function __construct($bar1, $bar2, $bar3)
    {
        $this->bar1 = $bar1;
        $this->bar2 = $bar2;
        $this->bar3 = $bar3;
    }

    public function __set_state($array)
    {
        $obj = new Foo;
        foreach ($array as $k => $v)
        {
            eval('$obj->'.$k.' = '.$v.';');
        }
        return $obj;
    }
}

$fooObj = new Foo(1, "abc", 5.23464);

?>
