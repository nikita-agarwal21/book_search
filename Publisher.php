<?php

class Publishers{
    private $pub_id;
    private $pub_name;
    private $email;
   

    public function __construct($pub_id,$pub_name,$email)
    {
        $this->pub_id=$pub_id;
        $this->pub_name=$pub_name;
        $this->email=$email;
       
    }

    public function getPubId()
    {
       return $this->pub_id;
    }

    public function setPubId($pub_id)
    {
       $this->pub_id= $pub_id;
    }

    public function getPubName()
    {
       return $this->pub_name;
    }

    public function setPubName($pub_name)
    {
       $this->pub_name = $pub_name;
    }

    public function getEmail()
    {
       return $this->email;
    }

    public function setEmail($email)
    {
       $this->email = $email;
    }


   



}







?>