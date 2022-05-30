<?php

class PatientsModel
{
    private $Connection;

    function __construct($Connection)
    {
        $this->Connection=$Connection;
    }
    
    function listPatients()
    {
        $sql="SELECT * FROM ";

        $this->Connection->query($sql);

        return $this->Connection->fetchAll();
    }

}
