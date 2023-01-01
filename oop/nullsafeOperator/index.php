<?php 
// references: https://wiki.php.net/rfc/constructor_promotion
declare(strict_types = 1);

class Point {
    public float $x;
    public float $y;
    public float $z;
 
    public function __construct(
        float $x = 0.0,
        float $y = 0.0,
        float $z = 0.0,
    ) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}


class Point1 {
    public function __construct(
        public float $x = 0.0,
        public float $y = 0.0,
        public float $z = 0.0,
    ) {}
}

// above code equivalent to the previous one 
// When a method parameter is prefixed with one of the visibility keywords public, protected or private, it is considered to be “promoted”. 


// Similarly, because promoted parameters imply a property declaration, nullability must be explicitly declared, and is not inferred from a null default value:

class Test {
    // Error: Using null default on non-nullable property
    // public function __construct(public Type $prop = null) {}
 
    // Correct: Make the type explicitly nullable instead
    public function __construct(public ?Type $prop = null) {}
}

$obj = new Point();
echo $obj->x;

class Invoice
{
    
}

class Order
{
    public ?Invoice $invoice = null;
}

$data = new Order();
var_dump($data);