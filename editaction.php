<?php
   $user = $_POST['username'];
   $paswd = md5(sha1($_POST['paswd']));
   $email = $_POST['email'];
   $nama = $_POST['nama'];
   $id = $_POST['userid'];

   if($_POST['password'] == "")
   {
      $k->query("query update tanpa password");
   }
   else
   {
      $paswd =($_POST['paswd']);
      $k->query("query update dengan password");
   }
   header("location: main.php");
