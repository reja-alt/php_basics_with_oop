<?php


class ToasterPro extends Toaster{         
    
    protected $slice;

    public function __construct(string $x, int $y) {   //type hint may be missmatchecd for constructor with parent class function while override
        // parent::__construct('foo');                       //way of calling parent constructor
        echo $y;
        $this->slice = 4;
    }

    public function Toaster(string $slice): void {   //type hint and return type can not missmatched with parent class function while override 
        parent::Toaster($slice);                            //way of calling parent public function
    }

    public function ResultBagel() {
        foreach($this->slices as $no =>$item) {
            echo $no + 1 . '. Toasting : ' . $item . 'with bagels option'. '<br>';
        }
    }
}