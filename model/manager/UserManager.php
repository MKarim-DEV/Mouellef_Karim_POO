<?php
class UserManager extends DbManager
{
    public function getByUsername($username)
    {
        $query = $this->bdd->prepare(
            "SELECT * FROM user WHERE username = :username"
        );
        $query->bindParam("username", $username);
        $query->execute();
        $res = $query->fetch();
        $user = null;
        if ($res != false) {
            $user = new User(
                $res["id"],
                $res["username"],
                $res["email"],
                $res["password"]
            );
        }
        return $user;
    }

    public function add(User $user)
    {
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = $user->getPassword();
        $query = $this->bdd->prepare(
            "INSERT INTO user (username,email, password) VALUES 
                    (:username,:email,:password)");
        $query->bindParam("username", $username);
        $query->bindParam('email', $email);
        $query->bindParam('password', $password);
        $query->execute();
    }
}
