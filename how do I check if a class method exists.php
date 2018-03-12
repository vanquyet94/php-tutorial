<?php 
class Test { 
  public function explicit(  ) { 
      // ... 
  } 
   
  public function __call( $meth, $args ) { 
      // ... 
  } 
} 

$Tester = new Test(); 

var_export(method_exists($Tester, 'anything')); // false 
var_export(is_callable(array($Tester, 'anything'))); // true 
