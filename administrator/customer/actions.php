<?php 
include('../../config/database.php');
include('../../config/constant.php');
include('../../functions/url_helpers.php');

$do_what = $_GET["do"];
if ( $do_what == 'insert' ) {
   $stm = $db_con->prepare( "INSERT INTO customer (username, password, name, surname, address, address_2, email, city, province, zip_code) VALUES (:username, :password, :name, :surname, :address, :address_2, :email, :city, :province, :zip_code)" );
   $stm->bindParam( "username", $_POST['email'] );
   $stm->bindParam( "password", $_POST['password'] );
   $stm->bindParam( "name", $_POST['name'] );
   $stm->bindParam( "surname", $_POST['surname'] );
   $stm->bindParam( "address", $_POST['address'] );
   $stm->bindParam( "address_2", $_POST['address_2'] );
   $stm->bindParam( "email", $_POST['email'] );
   $stm->bindParam( "city", $_POST['city'] );
   $stm->bindParam( "province", $_POST['province'] );
   $stm->bindParam( "zip_code", $_POST['zip_code'] );
   if($stm->execute()){
      echo "บันทึกข้อมูลได้สำเร็จ";
   }
   else{
      echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล กรุณาตรวจสอบใหม่อีกครั้ง !!";
   }
   // insert data to databse.
}

if ( $do_what == 'update' ) {
   // update data in database.
}


if ( $do_what == 'delete' ) {
   $stm = $db_con->prepare("DELETE FROM customer WHERE id = :id ");
   $stm->bindParam(':id', $_GET["id"]);
   if($result = $stm->execute()){
      echo "ลบข้อมูลได้สำเร็จ";
      
      header("Location: ./index.php");
   }
   else{
      echo "ลบข้อมูลไม่สำเร็จ";
   }
}
