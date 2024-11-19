<?php
    require '../model/ScientistDAO.php';
   //sudo mysql < scientists.sql
    $ScientistDAO = new ScientistDAO();
    $contacts=$ScientistDAO->getContacts();

?>
<!doctype html>
<html>
    <p>list</p>
    <body>
        <form action="scienceController.php" method="GET">
        <table>
            <tbody>
                <?php
                    for($index=0;$index<count($contacts);$index++){
                        echo "<tr><td>" .$contacts[$index]->name. "</td><td>"
                                .$contacts[$index]->nationality."</td><td>"
                                .$contacts[$index]->contribution."</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>