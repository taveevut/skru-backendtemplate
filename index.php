   <?php include('sys_head.php');?>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Project Goo</h1>
      </div>
      <div class="login-box">
        <form class="login-form" method="POST" action="./login_send.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>สำหรับเจ้าหน้าที่</h3>
          <div class="form-group">
            <label class="control-label">ชื่อผู้ใช้งาน</label>
            <input class="form-control" type="email" name="email" placeholder="ระบุที่อีเมล์" required autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">รหัสผ่าน</label>
            <input class="form-control" type="password" name="password" placeholder="ระบุรหัสผ่าน" required>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">จำฉันในระบบ</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">ลืมรหัสผ่าน</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>เข้าระบบ</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>ลืมรหัสผ่าน ?</h3>
          <div class="form-group">
            <label class="control-label">ที่อยู่อีเมล์</label>
            <input class="form-control" type="text" placeholder="ระบุที่อยู่อีเมล์">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>ส่งข้อมูล</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> กลับเข้าสู่ระบบ</a></p>
          </div>
        </form>
      </div>
    </section>
    <?php include('sys_footer.php');?>

    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>