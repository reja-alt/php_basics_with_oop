<?php
class Country {
    public function __construct(public ?User $user) {}
}

class User {
    public function __construct(public string $name) {}
}

$country = new Country(null);
$country->user;