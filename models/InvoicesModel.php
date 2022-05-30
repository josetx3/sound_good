<?php

class InvoicesModel
{
    private $Connection;

    function __construct($Connection)
    {
        $this->Connection = $Connection;
    }

    function listInvoices()
    {
        $sql="SELECT * FROM ";
        $this->Connection->query($sql);
        return $this->Connection->fetchAll();
    }

}

?>