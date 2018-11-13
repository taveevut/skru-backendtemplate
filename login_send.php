<?php
   include('./config/database.php');
   include('./functions/url_helpers.php');

   if(!empty($_POST)){
      echo '<pre>';
      print_r($_POST);
      echo '</pre>';

      redirect_admin('dashboard.php');
   }
?>