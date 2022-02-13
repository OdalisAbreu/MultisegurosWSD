<?php

    class records{
        
        function newRecord($userId, $type, $references){
            mysql_query("INSERT INTO records (user_id, type, references) VALUES ('".$userId."', '".$type."', '$references')");
        }
    }