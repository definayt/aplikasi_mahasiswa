

  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa <?php if($userdata->role != 'akademik') echo $data_fakultas->nama_fakultas?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
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
              <?php if($userdata->role !='akademik'){?>
              <div class="card-header">
                <a type="button" class="btn btn-info col-md-3" href="<?=base_url('Mahasiswa/insert/')?>">
                 Tambah Mahasiswa
                 </a>
              </div>
              <?php }?>              
              
              <div class="card-body">
                <table id="list-data" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                      foreach ($data_mahasiswa as $mhs){?>
                        <tr>
                          <td><?= $no?></td>
                          <td><?= $mhs->NIM?></td>
                          <td><?= $mhs->nama_mahasiswa?></td>
                          <td><?= $mhs->nama_prodi?></td>                  
                          
                          

                          <td>
                            <?php if($userdata->role !='akademik'){?>
                            <a type="button" class="btn btn-warning" href="<?=base_url('Mahasiswa/update/'.$mhs->NIM)?>">
                              Update
                            </a>
                            
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal_hapus" onclick="deleteScript('<?= base_url('Mahasiswa/delete/'.$mhs->NIM)?>')">
                              Delete
                            </button>
                            <?php } ?>

                            <button type="button" class="btn btn-success detail-mahasiswa" data-toggle="modal" data-target="#modal_detail"
                            id="<?php echo $mhs->NIM.'|'.$mhs->nama_mahasiswa.'|'.$mhs->nama_prodi.'|'.$mhs->nama_fakultas.'|'.$mhs->alamat.'|'.$mhs->gender.'|'.$mhs->tanggal_lahir.'|'.$mhs->agama ?>"
                            >
                              Detail
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

  <!-- Modal detail -->
  <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel"><span class="fa fa-user"></span>&nbsp;Detail Mahasiswa</h4>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
        </div>
        <div class="modal-body" id="IsiModal">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-close"></span>  Tutup</button>
          </div>
      </div>
    </div>
  </div>



