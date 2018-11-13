<?php
   include('./config/database.php');
   include('./config/constant.php');
   include('./functions/url_helpers.php');
   
   if(!empty($_POST)){
      $stmt = $db_con->prepare("SELECT * FROM customer WHERE username = :username AND password = :password ");
      $stmt->bindParam("username", $_POST['email']);
      $stmt->bindParam("password", $_POST['password']);
      $stmt->execute();
      $rows = $stmt->fetch(PDO::FETCH_ASSOC);

      if(empty($rows)){
         echo 'ไม่พบ username, password ในระบบ กรุณาตรวจสอบใหม่อีกครั้ง';
      }
      else{
         $_SESSION["login_id"] = $rows["id"]; // เก็บค่าในรูปแบบของ session
         $_SESSION["login_name"] = $rows["name"]; // เก็บค่าในรูปแบบของ session
         $_SESSION["login_surname"] = $rows["surname"]; // เก็บค่าในรูปแบบของ session

         redirect_admin('dashboard.php');
      }
   }
?>