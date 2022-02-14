<?php
    class records{
        
        function newRecord($userId, $type, $references){
           $record =  mysql_query("INSERT INTO `multiseg_2`.`records` (`id_user`, `type`, `references`, `date`) VALUES ('4', 'Venta Poliza', ' 50757', '".date("Y-m-d H:i:s")."')");
           if (!$record) {
            exit('144/'.die('Consulta no válida: ' . mysql_error()).'/00');
            }
        }
    }