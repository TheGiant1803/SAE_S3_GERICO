<?php
$nom_base = 'GERICO';
$adr_serv = 'localhost';
$port_serv = '3306';
$nom_util = 'root';
$psw_util = '';

try{
$pdo = new PDO(
 "mysql:host=$adr_serv;port=$port_serv;
 dbname=$nom_base;charset=utf8",
 "$nom_util"
,
 "$psw_util"
);
}catch(Throwable $e){
 die($e->getMessage());
}
?>