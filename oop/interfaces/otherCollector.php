<?php

interface OtherCollector {
    public function transaction(float $invoice): float; 
}