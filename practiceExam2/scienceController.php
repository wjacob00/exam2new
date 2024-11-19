<?php
    require_once 'model/ScientistDAO.php';

    $ScientistDAO = new ScientistDAO();
    $contacts=$ScientistDAO->getContacts();
    include "views/listScientists.php";


?>