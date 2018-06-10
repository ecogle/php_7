<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
require_once __DIR__ . '\Book.php';
require_once __DIR__ . '\Customer.php';

$book1 = new Book("97823434345","1984","George Orwell",12);
$book1 = new Book("79122312312","To Kill a Mockingbird","Harper Lee",2);

$customer1 = new Customer(1,"John","Doe","johndoe@mail.com");
$customer2 = new Customer(2,"Mary","Poppins","mp@mail.com");

