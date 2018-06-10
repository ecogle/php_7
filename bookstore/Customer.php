<?php

/**
 * Created by PhpStorm.
 * User: ecogle
 * Date: 5/30/2018
 * Time: 4:40 PM
 */
class Customer
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;


    public function __construct(int $id, string $firstName, string $surname, string $email){
        $this->firstName = $firstName;
        $this->id = $id;
        $this->lastName = $surname;
        $this->email = $email;
    }
}