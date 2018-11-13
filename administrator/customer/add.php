<?php 
   include('../../config/database.php');
   include('../../config/constant.php');
   include('../../functions/url_helpers.php');
   include('../sys_head.php');
?>
</head>

<body class="app sidebar-mini rtl">
   <?php include('../sys_sidemenu.php');?>
   <main class="app-content">
      <div class="app-title">
         <div>
            <h1><i class="fa fa-user-circle-o"></i> ลูกค้า</h1>
            <p>สามารถ เพิ่ม/แก้ไขและลบข้อมูลลูกค้าได้</p>
         </div>
         <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_admin_url('dashboard.php');?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo site_admin_url('customer/index.php');?>">ลูกค้า</a></li>
            <li class="breadcrumb-item">สร้างรายการ</li>
         </ul>
      </div>
      <div class="row">
         <div class="col-md-8">
            <form action="./actions.php?do=insert" method="POST">
               <div class="tile">
                  <h3 class="tile-title">สร้างรายการใหม่</h3>
                  <div class="tile-body">
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label>อีเมลล์</label>
                           <input type="email" name="email" class="form-control" placeholder="ระบุอีเมลล์" required="">
                        </div>
                        <div class="form-group col-md-6">
                           <label>รหัสผ่าน</label>
                           <input type="password" name="password" class="form-control" placeholder="ระบุรหัสผ่าน" required="">
                        </div>
                     </div>
                     <hr>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label>ชื่อ</label>
                           <input type="text" name="name" class="form-control" placeholder="ระบุชื่อ" required="">
                        </div>
                        <div class="form-group col-md-6">
                           <label>นามสกุล</label>
                           <input type="text" name="surname" class="form-control" placeholder="ระบุนามสกุล" required="">
                        </div>
                     </div>
                     <div class="form-group">
                        <label>ที่อยู่</label>
                        <input type="text" name="address" class="form-control" placeholder="ระบุที่อยู่" required="">
                     </div>
                     <div class="form-group">
                        <label for="inputAddress2">ที่อยู่ 2</label>
                        <input type="text" name="address_2" class="form-control" placeholder="ระบุที่อยู่ 2">
                     </div>
                     <div class="form-row">
                        <div class="form-group col-md-6">
                           <label>เมือง</label>
                           <input type="text" name="city" class="form-control" placeholder="ระบุเมือง" required="">
                        </div>
                        <div class="form-group col-md-4">
                           <label>จังหวัด</label>
                           <select name="province" class="form-control" required="">
                              <option>-เลือก-</option>
                              <?php 
                              $province = array(
                                 1 => "สตูล",
                                 2 => "สงขลา",
                                 3 => "ปัตตานี",
                                 3 => "ยะลา",
                                 5 => "นราธิวาส",
                              );
                              foreach ($province as $index => $value) {?>
                              <option value="<?php echo $index;?>">
                                 <?php echo $value;?>
                              </option>
                              <?php }?>
                           </select>
                        </div>
                        <div class="form-group col-md-2">
                           <label>รหัสไปรษณีย์</label>
                           <input type="text" name="zip_code" class="form-control" placeholder="ระบุ" required="">
                        </div>
                     </div>
                  </div>
                  <div class="tile-footer">
                     <div class="row">
                        <div class="col-md-8 col-md-offset-3">
                           <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-lg fa-check-circle"></i> บันทึกข้อมูล</button>
                           <button type="reset" class="btn btn-light"><i class="fa fa-fw fa-lg fa-times-circle"></i>ยกเลิก</button>
                        </div>
                     </div>
                  </div>
            </form>
         </div>
      </div>
      </div>
   </main>
   <?php include('../sys_footer.php');?>
</body>

</html>