<?php

class User
{
    private $id;
    private $name;
    private $email;
    private $password;
    private $roleid = "client";


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($username)
    {
        $this->name = $username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getRole()
    {
        return $this->roleid;
    }
    public function setERole($role)
    {
        $this->roleid = $role;
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
