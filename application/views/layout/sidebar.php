 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('Dashboard')?>" class="brand-link">
      <img src="<?= base_url()?>/assets/dist/img/AdminLTELogo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi Mahasiswa</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>
 -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="<?= base_url('Dashboard')?>" class="nav-link <?php if($page=='Dashboard') echo'active'?>">
              <i class="nav-icon fas fa-link"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('Mahasiswa')?>" class="nav-link <?php if($page=='Mahasiswa') echo'active'?>">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Data Mahasiswa
              </p>
            </a>
          </li>
          
          <?php if($userdata->role !='akademik'){?>
          
          <li class="nav-item">
            <a href="<?= base_url('Petugas')?>" class="nav-link <?php if($page=='Petugas') echo'active'?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                 Data Petugas
              </p>
            </a>
          </li>
        <?php }?>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>