<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item"> 
        <a href="<?= base_url('Auth/logout')?>" data-toggle="modal" data-target="#modal_logout">
          <i class="fas fa-sign-out-alt mr-2"></i> Logout
        </a>
      </li>
      
      
    </ul>
  </nav>
  <!-- /.navbar -->
<div class="modal fade" id="modal_logout" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin Logout?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a href="<?= base_url('Auth/logout')?>" class="btn btn-info">Ya</a>
            </div>
        </div>
      </div>
  </div>