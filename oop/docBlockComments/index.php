<?php
declare(strict_types = 1);
// param, return 

class Transaction {
    /**
     * @var [type]
     */
    private $name;
    /**
     * @param string $amount
     * @param string $description
     * 
     * @return string
     */
    public function process($amount,$description) {
        return 'access';
    }
}

/**
 * @param mixed $arg1
 * @param int $arg2
 * 
 * @return [type]
 */
function setFoo($arg1, $arg2 = 0)
    {
        if ($arg1 == 'good' || $arg1 == 'fair') {
            $this->foo = $arg1;
            return 1;
        } elseif ($arg1 == 'poor' && $arg2 > 1) {
            $this->foo = 'poor';
            return 2;
        } else {
            return false;
        }
    }

$data = new Transaction();
echo $data->process(34,54);