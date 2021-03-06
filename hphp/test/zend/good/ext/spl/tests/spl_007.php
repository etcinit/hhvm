<?php

class Foo {
    public function __call($name, $params) {
        echo "Called $name.\n";
        return true;
    }
}

$it = new ArrayIterator(array(1, 2, 3));

iterator_apply($it, array(new Foo, "foobar"));

?>
===DONE===
<?php exit(0); ?>
