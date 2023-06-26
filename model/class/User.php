<?php
class User {
    private $id;
    private $username;
    private $email;
    private $password;

    public function __construct($id, $username, $email, $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email=$email;
        $this->password = $password;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username): void
    {
        $this->username = $username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email): void
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password): void
    {
        $this->password = $password;
    }
}
?>
