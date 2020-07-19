<?php


class Users extends Dbh
{


    protected function getUsers($name)
    {

        $sql = "SELECT * FROM users WHERE user_firstname = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function setUsers($firstname, $lastname, $dob)
    {

        $sql = "INSERT INTO users(user_firstname,user_lastname,dob) VALUES (?,?,?)";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute([$firstname, $lastname, $dob]);
    }

}

?>