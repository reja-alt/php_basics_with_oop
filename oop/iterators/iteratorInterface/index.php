<?php

// class hillstations implements Iterator
// {
//     private $places = [];
//     private $count = 0;
//     private $index = 0;
//     public function current()
//     {
//         return $this->places[$this->index];
//     }
//     public function next()
//     {
//         $this->index++;
//     }
//     public function rewind()
//     {
//         $this->index = 0;
//     }
//     public function key()
//     {
//         return $this->index;
//     }
//     public function valid()
//     {
//         return isset($this->places[$this->key()]);
//     }
    
//     public function reverse()
//     {
//         $this->places = array_reverse($this->places);
//         $this->rewind();
//     }
//     public function addPlace(string $place)
//     {
//         array_push($this->places, $place);
//         $this->count++;
//     }
    
//     public function removePlace($place) 
//     {
//         $index = array_search($place, $this->places);
//         if(isset($this->places[$index])) {
//             unset($this->places[$index]);
//             $this->count--;
//         }
//     }
//     public function totalCount()
//     {
//         return $this->count;
//     }
// }

// $hillstation = new hillstations();
// $hillstation->addPlace("USA");
// $hillstation->addPlace("London");
// $hillstation->addPlace("Berlin");
// $hillstation->addPlace("Paris");
// $hillstation->addPlace("Russia");
// $hillstation->addPlace("Morroco");
// foreach ($hillstation as $key => $value) {
//     echo "Key: ".$key."----";
//     echo "Value: ".$value."<br/>";
// }
// $hillstation->reverse();
// echo "<hr/>";
// foreach ($hillstation as $key => $value) {
//     echo "Key: ".$key."----";
//     echo "Value: ".$value."<br/>";
// }


class GetArray implements IteratorAggregate {
    public array $fruits = ['mango', 'banana', 'apple', 'orange'];

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->fruits);
    }
}

$list = new GetArray();

foreach($list as $key => $item) {
    echo $key . ' and ' . $item . '<br>';
}