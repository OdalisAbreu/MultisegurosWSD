<?php
    class records{
        
        function newRecord($userId, $type, $references){
           $record =  mysql_query("INSERT INTO `multiseg_2`.`records` (`id_user`, `type`, `references`, `date`) VALUES ('4', 'Venta Poliza', ' 50757', '2022-2-10 10:58:00')");
           //exit('144/'.die('Consulta Valida: ' . mysql_error()).' '.date("Y-m-d H:i:s").' /00');
           if (!$record) {
            exit('144/'.die('Consulta no válida: ' . mysql_error()).' '.date("Y-m-d H:i:s").' /00');
            }
        }
    }