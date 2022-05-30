<?php

class AppointmentModel
{
    private $Connection;

    function __construct($Connection)
    {
        $this->Connection=$Connection;
    }
    
    function listAppointment()
    {
        $sql="SELECT * FROM ";

        $this->Connection->query($sql);
        return $this->Connection->fetchAll();
    }
}
