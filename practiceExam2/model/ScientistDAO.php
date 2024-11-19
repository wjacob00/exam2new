<?php
    require_once 'Scientist.php';

    class ScientistDAO {


        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "exam2user", "exam2pass","practiceExam2");
            if($mysqli->connect_errno){
                $mysqli=null;
            }
            return $mysqli;
        }

        public function getContacts(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM scientists");
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $contact = new Contact();
                $contact->load($row);
                $contacts[]=$contact;
            }
            $stmt->close();
            $connection->close();
            return $contacts;
        }


    }


?>