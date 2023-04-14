<?php
 class Perimeter
 {
    public $len;
    public $breadth;
     function __construct($l,$b)
     {
        $this->len = $l;
        $this->breadth = $b;
     }

     function calc_peri()
     {
        $peri= 2 * ($this->len + $this->breadth);
        echo $peri;
     }
 }



?>