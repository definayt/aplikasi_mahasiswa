

  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Petugas <?= $data_fakultas->nama_fakultas?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Petugas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                           
              
              <div class="card-body">
                <table id="list-data" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                      foreach ($data_petugas as $ptgs){?>
                        <tr>
                          <td><?= $no?></td>
                          <td><?= $ptgs->username?></td>
                          <td><?= $ptgs->role?></td>                          

                          <td>
                            
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_hapus" onclick="deleteScript('<?= base_url('Petugas/delete/'.$ptgs->id_petugas)?>')">
                              Delete
                            </button>
                            

                            
                          </td>
                        </tr>
                        <?php $no++;}?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



<!-- ./wrapper -->

<!-- Modals hapus -->  
  <div class="modal fade" id="modal_hapus" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Anda yakin ingin menghapus data ini?</h5>
          </div>
          <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Tidak</button>
                <a id="btn-delete" href="#" class="btn btn-info">Ya, Hapus</a>
            </div>
        </div>
      </div>
  </div>



