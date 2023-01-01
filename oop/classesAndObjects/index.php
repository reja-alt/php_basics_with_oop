<?php
CONST BR = '<br>';

class BankAccount {
   public $accountNumber;
   public $balance;
   public $withdrowalAmount;
   public $remaining;
   public $netBalance = 0;
   public $netWithdraw;


   public function Deposit($amount) {
        if($amount > 0) {
            $this->balance += $amount;
        }
        $this->netBalance += $amount;
   }

  
   public function withdrow($amount) {
        if($amount <= $this->balance) {
            $this->remaining = $this->balance -= $amount;
            $this->withdrowalAmount = $amount;
            $this->netWithdraw += $this->withdrowalAmount;
            return '<strong style="color:green;">can be withdrow</strong>';
        }
        return '<strong style="color:red;">Low amount, can not withdrow</strong>';
   }

   public function totalBalance() {
        return $this->netBalance;
   }

}

$account1 = new BankAccount;
$account2 = new BankAccount;
$account3 = new BankAccount;
$account4 = new BankAccount;


$account1->Deposit(5000);
print 'First Phase Deposit : ' . $account1->balance  . BR;
print($account1->withdrow(500)) . BR;
print 'First Phase Withdrow : ' . $account1->withdrowalAmount . BR;
print 'First Phase remaining : ' . $account1->remaining . BR . BR . BR;


$account2->Deposit(78000);
print 'Second Phase Deposit : ' . $account2->balance  . BR;
print($account2->withdrow(5400)) . BR;
print 'Second Phase Withdrow : ' . $account2->withdrowalAmount . BR;
print 'First Phase remaining : ' . $account2->remaining . BR;
print '<h4 style="color: purple;">Total Balance: ' . $account2->totalBalance() . '</h4>' . BR;
// $account2->Deposit(1000);
// $account3->Deposit(5000);
// $account4->Deposit(9000);

// print($account1->withdrow(500)) . BR;
// print($account2->withdrow(1000)) . BR;
// print($account3->withdrow(900)) . BR;
// print($account4->withdrow(2300)) . BR;
// print($account1->withdrow(5000)) . BR;




// print 'Second Phase Deposit : ' . $account2->balance  . BR;
// print 'Second Phase Withdrow : ' . $account2->withdrowalAmount . BR;

// print 'Third Phase Deposit : ' . $account3->balance  . BR;
// print 'Third Phase Withdrow : ' . $account3->withdrowalAmount . BR;

// print 'Fourth Phase Deposit : ' . $account4->balance  . BR;
// print 'Fourth Phase Withdrow : ' . $account4->withdrowalAmount . BR;

