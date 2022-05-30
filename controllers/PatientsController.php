<?php
require_once "models/PatientsModel.php";
require_once "views/PatientsView.php";
class PatientsController
{
    function paginatePatients()
    {
        $Connection = new Connection ('sel');

        $PatientsModel = new PatientsModel($Connection);
        $PatientsView = new PatientsView();

        $array_Patients = $PatientsModel->listPatients();
        $PatientsView->paginatePatients($array_Patients);
    }
}
?>