<?php

/**
 * Created by PhpStorm.
 * User: ecogle
 * Date: 5/30/2018
 * Time: 4:40 PM
 */
namespace Bookstore\Domain;

class Customer
{
    private $id;
    private $firstName;
    private $lastName;
    private $email;
    public static $lastId = 0;


    public function __construct(int $id, string $firstName, string $surname, string $email){
        $this->firstName = $firstName;
        $this->id = $id;
        $this->lastName = $surname;
        $this->email = $email;

        if($id == null){
            $this->id = ++self::$lastId;
        }
        else{
            $this->id = $id;
            if($id > self::$lastId){
                self::$lastId = $id;
            }
        }
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public static function getLastId():int{
        return self::$lastId;
    }

}