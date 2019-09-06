<?php
$str = <<<EOD
example for string;
Spanning multiple lines
using heredoc syntax.
EOD;

/*More complex example, with variable*/
class foo{
    var $foo;
    var $bar;

    function foo(){
        $this->foo = 'Foo';
        $this->foo = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = "Achmatim";

echo <<<EOT
<u>$str</u>
My name is "<b>$name</b>". I am printing domr <b>$foo->foo</b>.
Now, i am printing some <b>{$foo->bar[1]}</b>.
This should print a capital 'A': \x41
EOT;

?>