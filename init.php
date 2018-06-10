<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
/*require_once __DIR__ . '\src\Domain\Book.php';
require_once __DIR__ . '\src\Domain\Customer.php';*/

function autoload($className){
    $lastSlash=strpos($className,'\\')+1;
    $className = substr($className,$lastSlash);
    $directory = $className;
    $filename= __DIR__ .'\\src\\'.$directory.'.php';
    echo $filename.'<br/>';
    require_once $filename;
}

spl_autoload_register('autoload');

$book1 = new Book("97823434345","1984","George Orwell",12);
$book1 = new Book("79122312312","To Kill a Mockingbird","Harper Lee",2);

$customer1 = new Customer(1,"John","Doe","johndoe@mail.com");
$customer2 = new Customer(2,"Mary","Poppins","mp@mail.com");

