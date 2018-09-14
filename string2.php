<?php
$str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

$ab = <<<aku
aku sedangmasak diruma.
aku;

/* More complex example, with variables. */
class foo
{
    var $foo;
    var $bar;
    function foo()
    {
        $this->foo = 'akuuuuuuuuuuuu';
        $this->bar = array('irman1', 'irma2', 'ira3');
    }
}
$foo = new foo();
$name = 'Achmatim';

echo <<<PEOT
<u>$str</u><br>
$ab
My name is "<b>$name</b>". I am printing some <b>$foo->foo</b>.
Now, I am printing some <b>{$foo->bar[0]}</b>.
This should print a capital 'A': \x49
PEOT;
?>