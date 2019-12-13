<?php

class QuadraticEquation
{
    private $a;
    private $b;
    private $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    function getC()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        return $delta = $this->b ** 2 - 4 * $this->a * $this->c;
    }

    function getRoot1()
    {
        if ($this->getDiscriminant() >= 0) {
            return $r1 = ((-$this->b) + (sqrt(($this->b ** 2) - 4 * $this->a
                        * $this->c))) / (2 * $this->a);

        } else {
            return 'The equation has no roots';
        }
    }

    function getRoot2()
    {
        if ($this->getDiscriminant() >= 0) {
            return $r1 = ((-$this->b) - (sqrt(($this->b ** 2) - 4 * $this->a
                        * $this->c))) / (2 * $this->a);

        } else {
            return 'The equation has no roots';

        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Enter a, b, c <label>
        <input type="number" name="a">
        <input type="number" name="b"><input type="number" name="c"> </label>
    <input type="submit" name="load" value="Enter">
</form>
<?php
if (isset($_POST['load'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $eque = new QuadraticEquation($a, $b, $c);
    if ($eque->getDiscriminant() > 0) {
        echo "The equation has 2 roots: " . $eque->getRoot1() . " and "
            . $eque->getRoot2();
    } elseif ($eque->getDiscriminant() == 0) {
        echo "The equation has 1 root: " . $eque->getRoot1();

    } else {
        echo $eque->getRoot1();
    }

}
?>
</body>
</html>
