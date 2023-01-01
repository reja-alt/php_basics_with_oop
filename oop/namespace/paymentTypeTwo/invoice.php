<?php
namespace Payment\Secondary;
include_once('../namespace/notification/email.php');
// use DateTime;
use Notification\Email;

class Invoice {
    public $amount = 100;
}

function Deposit() {
    $amount = 23000;
    return $amount;
}

class getTime {
    public function __construct() {
        var_dump(new \DateTime());    //to access use / before DateTime or use DateTime; above
    }
}

class getEmail {
    public function __construct() {
        var_dump(new Email());    //to access use / before DateTime or use DateTime; above
    }
}
