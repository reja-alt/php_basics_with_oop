<?php

class Transaction {
    CONST BR = '<br>';
    private const STATUS_PAID = 'paid' . BR;
    private const STATUS_PENDING = 'pending' . BR;
    private const STATUS_DECLINED = 'declined' . BR;
    private string $status;

    public function __construct() {
        var_dump(Transaction::STATUS_PAID);         //accessing private constant
        var_dump(self::STATUS_PAID);
        var_dump($this::STATUS_PAID);
    }

    public function setStatus(string $status): self {
        $this->status = $status;
        return $this->status;
    }
}