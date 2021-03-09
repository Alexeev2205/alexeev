// вариант 2 Алексеев Денис
<?php

class A
{

}

class B extends Line
{
    public function __construct($a)
    {
        $this->a = $a;
    }

    protected $a;
}

class C extends Square
{
    public function __construct($a, $b)
    {
        $this->b = $b;
        parent::__construct($a);
    }

    protected $b;
}

$a1 = new Line();
$a2 = new Line();
$a3 = new Line();
$b4 = new Square($a1);
$c5 = new C($b4, $a2, $a3);
var_dump ($c5);