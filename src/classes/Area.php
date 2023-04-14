<?php
 class Area
 {
    public $len;
    public $breadth;
     function __construct($l,$b)
     {
        $this->len = $l;
        $this->breadth = $b;
     }

     function calc_area()
     {
        $area= $this->len * $this->breadth;
        echo $area;
     }
 }



?>