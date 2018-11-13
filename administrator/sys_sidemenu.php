<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="<?php echo site_admin_url('dashboard.php');?>">Project Goo</a>
   <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
   <!-- Navbar Right Menu-->
   <ul class="app-nav">
      <!--Notification Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
         <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
               <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                     <div>
                        <p class="app-notification__message">Lisa sent you a mail</p>
                        <p class="app-notification__meta">2 min ago</p>
                     </div>
                  </a></li>
               <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                     <div>
                        <p class="app-notification__message">Mail server not working</p>
                        <p class="app-notification__meta">5 min ago</p>
                     </div>
                  </a></li>
               <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                     <div>
                        <p class="app-notification__message">Transaction complete</p>
                        <p class="app-notification__meta">2 days ago</p>
                     </div>
                  </a></li>
               <div class="app-notification__content">
                  <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                           <p class="app-notification__message">Lisa sent you a mail</p>
                           <p class="app-notification__meta">2 min ago</p>
                        </div>
                     </a></li>
                  <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                           <p class="app-notification__message">Mail server not working</p>
                           <p class="app-notification__meta">5 min ago</p>
                        </div>
                     </a></li>
                  <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                        <div>
                           <p class="app-notification__message">Transaction complete</p>
                           <p class="app-notification__meta">2 days ago</p>
                        </div>
                     </a></li>
               </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
         </ul>
      </li>
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg fa-fw"></i>  <?php echo $_SESSION["login_name"].' '.$_SESSION["login_surname"];?></a>
         <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> แก้ไขโปรไฟล์</a></li>
            <li><a class="dropdown-item" href="<?php echo site_admin_url('logout.php');?>"><i class="fa fa-sign-out fa-lg"></i> ออกจากระบบ</a></li>
         </ul>
      </li>
   </ul>
</header>
<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
   <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
      <div>
         <p class="app-sidebar__user-name">John Doe</p>
         <p class="app-sidebar__user-designation">Frontend Developer</p>
      </div>
   </div>
   <ul class="app-menu">
      <li><a class="app-menu__item active" href="<?php echo site_admin_url('dashboard.php');?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li><a class="app-menu__item" href="<?php echo site_admin_url('customer/index.php');?>"><i class="app-menu__icon fa fa-user-circle-o"></i><span class="app-menu__label">ลูกค้า</span></a></li>
      <li><a class="app-menu__item" href="<?php echo site_admin_url('orders/index.php');?>"><i class="app-menu__icon fa fa-cart-plus"></i><span class="app-menu__label">รายการสั่งซื้อ</span></a></li>
      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bars"></i><span class="app-menu__label">Dropdown</span><i class="treeview-indicator fa fa-angle-right"></i></a>
         <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Item 1</a></li>
            <li><a class="treeview-item" href="#" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Item 2</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Item 3</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i> Item 4</a></li>
         </ul>
      </li>
   </ul>
</aside>