<?php
class AccessModel
{
    private $Connection;

    function __construct($Connection)
    {
        $this->Connection=$Connection; 
    }

    function validateFormSession($email,$password)
    {
        $sql="SELECT * FROM acceso 
              WHERE acce_email='$email' 
              AND acce_contra='$password'
              ";
        $this->Connection->query($sql);
        return $this->Connection->fetchAll();
    }
}
?>