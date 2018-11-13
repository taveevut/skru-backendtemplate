<?php
include '../../config/database.php';
include '../../config/constant.php';
include '../../functions/url_helpers.php';

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
   if ( $stm->execute() ) {
      $_SESSION['alt']['message'] = '<strong>บันทึกข้อมูลได้สำเร็จ!</strong> ระบบทำการบันทึกข้อมูลได้สำเร็จ';
		$_SESSION['alt']['type'] = 'success';
   } else {
      $_SESSION['alt']['message'] = '<strong>เกิดข้อผิดพลาด!</strong>เกิดข้อผิดพลาดในระหว่างการแก้ไขข้อมูล กรุณาตรวจสอบใหม่อีกครั้ง';
		$_SESSION['alt']['type'] = 'danger';
   }

   header("Location:./index.php");
}

if ( $do_what == 'update' ) {
   $stm = $db_con->prepare( "UPDATE customer SET name = :name, surname = :surname, address = :address, address_2 = :address_2, email = :email, city = :city, province = :province, zip_code = :zip_code WHERE id = :id" );
   $stm->bindParam( "name", $_POST['name'] );
   $stm->bindParam( "surname", $_POST['surname'] );
   $stm->bindParam( "address", $_POST['address'] );
   $stm->bindParam( "address_2", $_POST['address_2'] );
   $stm->bindParam( "email", $_POST['email'] );
   $stm->bindParam( "city", $_POST['city'] );
   $stm->bindParam( "province", $_POST['province'] );
   $stm->bindParam( "zip_code", $_POST['zip_code'] );
   $stm->bindParam( "id", $_GET['id'] );

   if ( $stm->execute() ) {
      $_SESSION['alt']['message'] = '<strong>แก้ไขข้อมูลได้สำเร็จ!</strong> ระบบทำการแก้ไขข้อมูลได้สำเร็จ';
		$_SESSION['alt']['type'] = 'success';
   } else {
      $_SESSION['alt']['message'] = '<strong>เกิดข้อผิดพลาด!</strong>เกิดข้อผิดพลาดในระหว่างการแก้ไขข้อมูล กรุณาตรวจสอบใหม่อีกครั้ง';
		$_SESSION['alt']['type'] = 'danger';
   }

   header("Location:./index.php");
}

if ( $do_what == 'delete' ) {
   $stm = $db_con->prepare( "DELETE FROM customer WHERE id = :id " );
   $stm->bindParam( ':id', $_GET["id"] );
   if ( $stm->execute() ) {
      $_SESSION['alt']['message'] = '<strong>ลบข้อมูลได้สำเร็จ!</strong> ระบบทำการลบข้อมูลได้สำเร็จ';
		$_SESSION['alt']['type'] = 'success';
   } else {
      $_SESSION['alt']['message'] = '<strong>เกิดข้อผิดพลาด!</strong>เกิดข้อผิดพลาดในระหว่างการแก้ไขข้อมูล กรุณาตรวจสอบใหม่อีกครั้ง';
		$_SESSION['alt']['type'] = 'danger';
   }

   header("Location:./index.php");
}
