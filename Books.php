<?php

class Books{
    private $isbn_no;
    private $name;
    private $pub_id;
    private $pub__year;
    private $price;
    private $pages;


    public function __construct($isbn_no,$name,$pub_id,$pub_year,$price,$pages)
    {
        $this->isbn_no=$isbn_no;
        $this->name=$name;
        $this->pub_id=$pub_id;
        $this->pub_year=$pub_year;
        $this->price=$price;
        $this->pages=$pages;

    }

    public function getIsbnNo()
    {
       return $this->isbn_no;
    }

    public function setIsbnNo($isbn_no)
    {
       $this->isbn_no = $isbn_no;
    }
    public function getName()
    {
       return $this->name;
    }

    public function setName($name)
    {
       $this->name = $name;
    }

    public function getPubId()
    {
       return $this->pub_id;
    }

    public function setPubId($pub_id)
    {
       $this->pub_id = $pub_id;
    }

    public function getPubYear()
    {
       return $this->pub_year;
    }

    public function setPubYear($pub_year)
    {
       $this->pub_year= $pub_year;
    }


    public function getPrice()
    {
       return $this->price;
    }

    public function setPrice($price)
    {
       $this->price = $price;
    }
    public function getPages()
    {
       return $this->pages;
    }

    public function setPages($pages)
    {
       $this->pages = $pages;
    }



}







?>