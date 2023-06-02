<?php
    //connect to the server
    $connect = mysqli_connect("localhost","root","") or die ("Unable to connect to MySQL Server.");
    
    //create the database if it does not exist & login into it
    $dbstart = "CREATE DATABASE IF NOT EXISTS `new`;";
    $connect->query($dbstart);
    mysqli_select_db($connect , "loginsystemtut");

    // create table if it does not exist
    $que = "CREATE TABLE IF NOT EXISTS `imgupload` (
            `id` INT(11) NOT NULL AUTO_INCREMENT , 
            `userid` INT(11) NOT NULL ,
          `status` INT(11) NOT NULL ,
        );
    $connect->query($que);

    $que = "CREATE TABLE IF NOT EXISTS `users` (
            `idUsers` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
            `uidUsers` TINYTEXT NOT NULL,
            `emailUsers` TINYTEXT NOT NULL,
            `pwdUsers` LONGTEXT NOT NULL
            );
    $connect->query($que);

  
?>
