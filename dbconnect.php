<?php
    $server = 'localhost'; 
    $username = 'root';
    $password = '';
    $namadb = 'newdb';
    
   $k = new mysqli($server, $username, $password, $namadb);
   if($k->connect_errno)
   {
        echo "failed ", $k->connect_error;
        exit();
   
