<?php

class UserView extends Users
{

    public function showUsers($name)
    {

        $results = $this->getUsers($name);

        echo "Full Name :" . $results[0]['user_firstname'] . "" . $results[0]['user_lastname'] . "<br>";
        echo "Date Of Birth :" . $results[0]['dob'];
    }
}


?>