<?php
    class records{
        
        function newRecord($userId, $type, $references){
            $date = date('Y/m/d H:i:s');
           $record =  mysql_query("INSERT INTO records (user_id, type, references, date) VALUES ('".$userId."', '".$type."', '".$references."', '".$date."')");
           
           if (!$record) {
            exit('144/'.die('Consulta no válida: ' . mysql_error()).' NUM/00');
            }
        }
    }