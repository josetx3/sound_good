<?php
require_once "models/MedicModel.php";
require_once "views/MedicView.php";

class MedicController
{
    function paginateMedic()
    {
        $Connection=new Connection('sel');

        $MedicModel=new MedicModel($Connection);
        $MedicView=new MedicView();

        $array_countries=$MedicModel->listMedic(); 

        $MedicView->paginateMedic($array_countries);
    }

    function showMedic()
    {
        $Connection=new Connection('sel');
        
        $MedicModel=new MedicModel($Connection);
        
        $MedicView=new MedicView();

        $coun_id=$_POST['id'];

        $array_Medic=$MedicModel->selectMedic($coun_id);

        $MedicView->showMedic($array_Medic); 
    }
}
?>