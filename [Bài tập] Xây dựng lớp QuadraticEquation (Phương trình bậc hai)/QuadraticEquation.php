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

    function get_a()
    {
        return $this->a;
    }

    function get_b()
    {
        return $this->b;
    }

    function get_c()
    {
        return $this->c;
    }

    function getDiscriminant()
    {
        return (($this->b ** 2) - 4 * ($this->a * $this->c));
    }

    function getRoot1()
    {
        return ((-$this->b) + sqrt($this->getDiscriminant())) / (2 * $this->a);
    }
    function getRoot2()
    {
        return ((-$this->b) - sqrt($this->getDiscriminant())) / (2 * $this->a);
    }

}