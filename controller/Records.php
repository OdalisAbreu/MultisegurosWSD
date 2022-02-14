<?php
    class records{
        
        function newRecord($userId, $type, $references){
            $date = 
           $record =  mysql_query("INSERT INTO records (id_user, type, references) VALUES 
           ('".$userId."', '".$type."', '".$references."')");
           
       
           if (!$record) {
            exit('144/'.die('Consulta no válida: ' . mysql_error()).' NUM/00');
            }
        }
    }