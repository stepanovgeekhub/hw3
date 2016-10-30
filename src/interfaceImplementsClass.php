<?php

namespace Vendor\Hw3;

class interfaceImplementsClass implements iInterface
{
   public function setVariable($name, $var){
       echo $name . "=" . $var;
   }
}