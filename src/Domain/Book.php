<?php
/**
 * Created by PhpStorm.
 * User: ecogle
 * Date: 5/30/2018
 * Time: 4:39 PM
 */
namespace Bookstore\Domain;

class Book{

    private $isbn;
    private $title;
    private $author;
    private $available;


    public function __construct(int $isbn, string $title, string $author, int $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author=$author;
        $this->available = $available;
    }

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor():string
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param mixed $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }


    public function __toString():string{
        $result = '<i>' . $this->title . '</i> - '. $this->author;
        if(!$this->available){
            $result .= ' <b>Not Available</b>';
        }
        return $result;
    }

    public function getCopy():bool{
        if($this->available < 1){
            return false;
        }
        else{
            $this->available--;
            return true;
        }
    }

    public function addCopy(){
        $this->available++;
    }

}