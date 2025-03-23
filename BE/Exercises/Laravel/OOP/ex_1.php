<?php
class User
{
    private $username;
    private $password;
    private $db_username = "khanhphan";
    private $db_password = "Khanh16121997@";

    public function setInfo($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    function checkLogin()
    {
        if (
            $this->username == $this->db_username
            && $this->password == $this->db_password
        ) {
            echo "Hello: " . $this->username;
        } else {
            echo $this->username . " doesn't exist in the system";
        }
    }
}

$a = new User();
$a->setInfo("khanhphan1", "Khanh16121997@");
$a->checkLogin();
?>