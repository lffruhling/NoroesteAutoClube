<?php
$conexao = mysql_connect('localhost','root','')
           or die(mysql_error());
$db = mysql_select_db('wordpress')
           or die(mysql_error());
?>