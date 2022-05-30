<?php
require_once "views/MenuView.php";

class MenuController
{
    function validateMenu()
    {
        $MenuView=new MenuView();  
        $MenuView->showMenu();
    }
}
?>