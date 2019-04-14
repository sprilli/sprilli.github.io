<?php 

mysql_connect('localhost',"root");
 mysql_select_db('bordo');
  mysql_query("Create table form (id int(15) not null AUTO_INCREMENT, firstname varchar(255), phone int(15) not null,description varchar(255), Primary key(id) )");
    mysql_query("insert into `form` values (0,'". $_POST['firstname'] ."','" .  $_POST['phone'] ."', '".  $_POST['description']. "')");



?>
