<?php

 class demo  
 {  
    protected float $purchase = 3434.90;
    public function display()  
    {  
        echo "example of inheritance  ";  
    } 
    
    protected function getText() {
        echo 'protected data';
    }
 }  
 class demo1 extends demo  
 {  
     public function view()  
     {  
         echo "in php";  
     }   
     
     public function getProtectedData(): float {
        return $this->purchase;
    }

    public function Text() {
        return $this->getText();
    }
 }  

 $demo = new Demo1();
 echo $demo->display();
echo $demo->getProtectedData();
echo $demo->Text();


class Fruit {
  public function intro() {
      // some code
    }
  }
  
  class Strawberry extends Fruit {
    // will result in error
    public function intro() {
      // some code
    }
  }