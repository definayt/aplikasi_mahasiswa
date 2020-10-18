

  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Data Mahasiswa</li>
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
              <div class="card-header">
                Form Tambah Mahasiswa
              </div>
              
              
              <div class="card-body">
                <form action="<?= base_url('Mahasiswa/proses_insert')?>" method="POST">
                <table class="table table-bordered table-hover">
                  <input type="hidden" name="id_fakultas" value="<?= $userdata->id_fakultas?>">
                  <tr>
                    <td>NIM</td>
                    <td><input type="text" class="form-control" name="NIM"></td>
                    <td>Nama</td>
                    <td><input type="text" class="form-control" name="nama_mahasiswa"></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td colspan="3"><input type="text" class="form-control" name="alamat"></td>
                    
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <!-- <td><input type="date" class="form-control" name="tanggal_lahir"></td> -->
                    <td><select name="tgl" class="form-control">
                        <?php
                       
                        for($t=1;$t<=31;$t++)
                        {
                        echo "<option value=$t>$t</option>";
                        }
                        ?>
                        </select>
                        <select name="bln" class="form-control">
                         <option value="Januari">Januari</option>
                         <option value="Februari">Februari</option>
                         <option value="Maret">Maret</option>
                         <option value="April">April</option>
                         <option value="Mei">Mei</option>
                         <option value="Juni">Juni</option>
                         <option value="Juli">Juli</option>
                         <option value="Agustus">Agustus</option>
                         <option value="September">September</option>
                         <option value="Oktober">Oktober</option>
                         <option value="November">November</option>
                         <option value="Desember">Desember</option>
                        </select>
                        <select name="thn" class="form-control">
                        <?php
                        
                        for($t=1990;$t<=2013;$t++)
                        {
                        echo "<option value=$t>$t</option>";
                        }
                        ?>
                        </select>
                    </td>
                    <td>Gender</td>
                    <td>  
                      <input type="radio" name="gender" value="P" checked="checked">Perempuan <br />      
                      <input type="radio" name="gender" value="L">Laki-Laki 
                    </td>
                  </tr>
                  <tr>
                    <td>Agama</td>
                    <td>
                      <select class="form-control" name="agama">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Khatolik">Khatolik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="Khonghucu">Khonghucu</option>
                      </select>
                    </td>
                    <td>Prodi</td>
                    <td>
                       <select class="form-control" name="prodi">
                        <?php foreach($data_prodi as $prodi) {?>
                          <option value="<?= $prodi->id_prodi?>"> <?= $prodi->nama_prodi?></option>
                        <?php }?>
                       </select>
                    </td>
                  </tr>
                </table>
                  <tr>
                    <td colspan="2">
                       
                        <button type="submit" class="form-control btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>            
                    
                    </td>
                </form>

                    
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



