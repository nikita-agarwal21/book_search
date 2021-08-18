<?php

class Authors{
    private $auth_id;
    private $auth_name;
    private $email;
   

    public function __construct($auth_id,$auth_name,$email)
    {
        $this->auth_id=$auth_id;
        $this->auth_name=$auth_name;
        $this->email=$email;

    }

    public function getAuthId()
    {
       return $this->auth_id;
    }

    public function setAuthId($auth_id)
    {
       $this->auth_id = $auth_id;
    }

    public function getAuthName()
    {
       return $this->auth_name;
    }

    public function setAuthName($auth_name)
    {
       $this->auth_name = $auth_name;
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