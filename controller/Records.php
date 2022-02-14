<?php
    class records{
        
        function newRecord($userId, $type, $references){
           $record =  mysql_query("INSERT INTO records (id_user, type, references, date) VALUES 
           ('".$userId."', '".$type."', '".$references."', '".date("Y-m-d H:i:s")."')");
       
           if (!$record) {
            exit('144/'.die('Consulta no válida: ' . mysql_error()).' NUM/00');
            }
        }
    }