# PHP `__set_state` Rebuild of a `var_export`

This repo demonstrates how to use the `__set_state($array)` method in PHP to universally rebuild a `var_dump()` of any given class. I use this across my code to pass complicated classes between pages.

You can add this function to the end of any class to automatically rebuild a `var_dump()`:

```
    ...
    public function __set_state($array)
    {
        $obj = new Foo;
        foreach ($array as $k => $v)
        {
            eval('$obj->'.$k.' = '.$v.';');
        }
        return $obj;
    }
    ...
```

This is demonstrated in the `class_definition.php` file with a simple implementation of the `Foo` class.
