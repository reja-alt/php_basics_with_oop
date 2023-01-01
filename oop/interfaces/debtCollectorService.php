<?php
namespace Collection;
include 'collectorAgency.php';

class DebtCollectionService {
    public function collectDebt(Agency $agency) {
        $owedAmount = mt_rand(100, 1000);
        $collectionAmount = $agency->collect($owedAmount);

        echo 'Collected $' .  $collectionAmount . 'out of $' . $owedAmount;
    }
}
