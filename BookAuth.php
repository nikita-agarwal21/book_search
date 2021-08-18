<?php

class BookAuth{
    private $isbn_no;
    private $auth_id;
    

    public function __construct($isbn_no,$auth_id)
    {
        $this->isbn_no=$isbn_no;
        $this->auth_id=$auth_id;
       
    }

    public function getIsbnNo()
    {
       return $this->isbn_no;
    }

    public function setIsbnNo($isbn_no)
    {
       $this->isbn_no = $isbn_no;
    }

    public function getAuthId()
    {
       return $this->auth_id;
    }

    public function setAuthId($auth_id)
    {
       $this->auth_id = $auth_id;
    }

   

}







?>