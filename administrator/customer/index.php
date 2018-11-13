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
            <li class="breadcrumb-item">ลูกค้า</li>
         </ul>
      </div>
      <div class="row">
         <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_admin_url('customer/add.php');?>"><i class="fa fa-plus-circle" aria-hidden="true"></i> สร้างรายการ</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_admin_url('customer/index.php');?>"><i class="fa fa-refresh" aria-hidden="true"></i> Refrash</a>
                     </li>
                     <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                        </li> -->
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <input class="form-control mr-sm-2" type="search" placeholder="ค้าหารายชื่อลูกค้า" aria-label="Search">
                     <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
                  </form>
               </div>
            </nav>
            <div class="tile">
               <div class="tile-body">
                  <h3 class="tile-title">รายการลูกค้าทั้งหมด</h3>
                  <div class="table-responsive">
                     <table class="table">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>ชื่อ-สกุล</th>
                              <th>ที่อยู่อีเมล์</th>
                              <th>ที่อยู่</th>
                              <th class="text-center">จัดการ</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $n = 1; 
                        $stmt = $db_con->prepare("SELECT * FROM customer ORDER BY id DESC");
                        $stmt->execute();
                        while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {?>
                        <tr>
                           <td scope="row"><?php echo $n;?></td>
                           <td><?php echo $rows["name"];?> <?php echo $rows["surname"];?></td>
                           <td><?php echo $rows["email"];?></td>
                           <td><?php echo $rows["address"];?></td>
                           <td width="1" class="text-center text-nowrap">
                              <a href="#" class="btn btn-light"><i class="fa fa-search-plus" aria-hidden="true"></i> ดูข้อมูลเพิ่มเติม</a>
                              <a href="./edit.php?id=<?php echo $rows["id"];?>" class="btn btn-info"><i class="fa fa-pencil-square" aria-hidden="true"></i> แก้ไข</a>
                              <a href="./actions.php?do=delete&id=<?php echo $rows["id"];?>" class="btn btn-danger"><i class="fa fa-minus-circle" aria-hidden="true"></i> ลบ</a>
                           </td>
                        </tr>
                        <?php $n++; }?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
   <?php include('../sys_footer.php');?>
</body>

</html>