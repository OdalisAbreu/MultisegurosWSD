<?php

    class records{
        
        function newRecord($userId, $type, $references){
            mysql_query("INSERT INTO records (user_id, type, references, date) VALUES ('".$userId."', '".$type."', '".$references."', '".date('Y/m/d H:i:s')."')");
        }
    }