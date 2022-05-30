<?php
require_once "models/AppointmentModel.php";
require_once "views/AppointmentView.php";

class AppointmentController
{

    function paginateAppointment()
    {
        $Connection = new Connection ('sel');

        $AppointmentModel = new AppointmentModel($Connection);
        $AppointmentView = new AppointmentView();

        $array_appointment = $AppointmentModel->listAppointment();
        $AppointmentView->paginateAppointment($array_appointment);
    }

}
?>