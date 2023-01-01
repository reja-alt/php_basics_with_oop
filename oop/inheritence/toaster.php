<?php

include 'toasterPro.php';

//unstudied topics composition
//final class prevent method overriding and inheritence, 
//php does not support multiple inheritence but supprt multilevel inheritence

// final class Toaster {          //if  we use final keyword Error: Class ToasterPro cannot extend final class Toaster
 
class Toaster {   
    protected array $slices = [];
    protected $slice;

    public function __construct(string $x, string $y) {
        $this->slice = 2;
    }

    // final public function Toaster(string $slice): void {    //if  we use final keyword Fatal error: Cannot override final method Toaster::Toaster() 
    public function Toaster(string $slice): void { 
        if(count($this->slices) < $this->slice) {
            $this->slices[] = $slice;
        }
    }

    public function Result() {
        foreach($this->slices as $no =>$item) {
            echo $no + 1 . '. Toasting : ' . $item . '<br>';
        }
    }
}

// $slice = new Toaster();
// $slice->Toaster('bread');
// $slice->Toaster('cake');
// $slice->Result();

$slice = new ToasterPro('foo' , 3);
$slice->Toaster(slice: 'bread');         //named argument
$slice->Toaster('cake');
$slice->Toaster('biscuits');
$slice->Toaster('banana');
$slice->ResultBagel();
// $slice->Toaster('donut');
// var_dump($slice->slices);