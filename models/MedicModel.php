<?php
class MedicModel
{
    private $Connection;
    
    function __construct($Connection)
    { 
        $this->Connection=$Connection;
    }

    /* MOSTRAR LOS MEDICOS EN LA TABLA DE LA VISTA */
    function listMedic()
    {
        $sql="SELECT * FROM medicos";

        $this->Connection->query($sql);

        return $this->Connection->fetchAll();
    }

    
    function selectMedic($medi_id)
    {
        $sql="SELECT * FROM medicos WHERE medi_id=$medi_id";

        $this->Connection->query($sql);

        return $this->Connection->fetchAll();
    }

/*
    function insertMedic($medi_nombre)
    {
        $sql="INSERT INTO medicos (medi_nombre) VALUES ('$medi_nombre')";

        $this->Connection->query($sql);
    }

    function updateMedic($medi_id,$medi_nombre)
    {
        $sql="UPDATE medicos SET medi_nombre='$medi_nombre' WHERE medi_id=$medi_id";

        $this->Connection->query($sql);
    }

    function duplacateInsertMedic($medi_nombre)
    {
        $sql="SELECT * FROM medicos WHERE medi_nombre='$medi_nombre'";

        $this->Connection->query($sql);

        return $this->Connection->fetchAll();
    }

    function duplacateUpdateMedic($medi_id,$medi_nombre)
    {
        $sql="SELECT * FROM medicos WHERE medi_nombre='$medi_nombre' AND medi_id!=$medi_id";

        $this->Connection->query($sql);

        return $this->Connection->fetchAll();
    }
*/
}
?>