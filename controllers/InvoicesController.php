<?php
require_once "models/InvoicesModel.php";
require_once "views/InvoicesView.php";

class InvoicesController
{

    function paginateInvoices()
    {
        $Connection = new Connection ('sel');

        $InvoicesModel = new InvoicesModel($Connection);
        $InvoicesView = new InvoicesView();

        $array_Invoices = $InvoicesModel->listInvoices();
        $InvoicesView->paginateInvoices($array_Invoices);
    }

}
?>