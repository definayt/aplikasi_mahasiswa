

  <!-- Navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Mahasiswa</li>
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
                Form Edit Mahasiswa
              </div>
              
              
              <div class="card-body">
                <form action="<?= base_url('Mahasiswa/proses_update')?>" method="POST">
                <table class="table table-bordered table-hover">
                  <input type="hidden" name="id_fakultas" value="<?= $userdata->id_fakultas?>">
                  <tr>
                    <td>NIM</td>
                    <td><input type="text" class="form-control" name="NIM" value="<?= $data_mahasiswa->NIM?>" disabled></td>
                    <input type="hidden" name="NIM" value="<?= $data_mahasiswa->NIM?>">
                    <td>Nama</td>
                    <td><input type="text" class="form-control" name="nama_mahasiswa" value="<?= $data_mahasiswa->nama_mahasiswa ?>"></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td colspan="3"><input type="text" class="form-control" name="alamat" value="<?= $data_mahasiswa->alamat ?>"></td>
                    
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <!-- <td><input type="date" class="form-control" name="tanggal_lahir" value="<?= $data_mahasiswa->tanggal_lahir ?>"></td> -->
                    <?php 
                      $tgl_lahir = explode(' ', $data_mahasiswa->tanggal_lahir);
                     ?>
                    <td><select name="tgl" class="form-control">
                        <?php
                       
                        for($t=1;$t<=31;$t++)
                        {
                        ?>
                        <option value=<?= $t?> <?php if ($tgl_lahir[0]==$t)echo "selected"; ?> ><?= $t?></option>;
                        <?php
                        }
                        ?>
                        </select>
                        <select name="bln" class="form-control">
                         <option value="Januari" <?php if ($tgl_lahir[1]=='Januari')echo "selected"; ?> >Januari</option>
                         <option value="Februari" <?php if ($tgl_lahir[1]=='Februari')echo "selected"; ?>>Februari</option>
                         <option value="Maret" <?php if ($tgl_lahir[1]=='Maret')echo "selected"; ?>>Maret</option>
                         <option value="April" <?php if ($tgl_lahir[1]=='April')echo "selected"; ?>>April</option>
                         <option value="Mei" <?php if ($tgl_lahir[1]=='Mei')echo "selected"; ?>>Mei</option>
                         <option value="Juni" <?php if ($tgl_lahir[1]=='Juni')echo "selected"; ?>>Juni</option>
                         <option value="Juli" <?php if ($tgl_lahir[1]=='Juli')echo "selected"; ?>>Juli</option>
                         <option value="Agustus" <?php if ($tgl_lahir[1]=='Agustus')echo "selected"; ?>>Agustus</option>
                         <option value="September" <?php if ($tgl_lahir[1]=='September')echo "selected"; ?>>September</option>
                         <option value="Oktober" <?php if ($tgl_lahir[1]=='Oktober')echo "selected"; ?>>Oktober</option>
                         <option value="November" <?php if ($tgl_lahir[1]=='November')echo "selected"; ?>>November</option>
                         <option value="Desember" <?php if ($tgl_lahir[1]=='Desember')echo "selected"; ?>>Desember</option>
                        </select>
                        <select name="thn" class="form-control">
                        <?php
                        
                        for($t=1990;$t<=2013;$t++)
                        {
                        ?>
                        <option value=<?= $t?><?php if ($tgl_lahir[2]==$t)echo "selected"; ?> ><?= $t?></option>;
                        <?php
                        }
                        ?>
                        </select>
                    </td>
                    <td>Gender</td>
                    <td>  
                      <input type="radio" name="gender" value="P" <?php if ($data_mahasiswa->gender=='P')echo "checked"; ?>>Perempuan <br />      
                      <input type="radio" name="gender" value="L" <?php if ($data_mahasiswa->gender=='L')echo "checked"; ?>>Laki-Laki 
                    </td>
                  </tr>
                  <tr>
                    <td>Agama</td>
                    <td>
                      <select class="form-control" name="agama">
                        <option value="Islam" <?php if ($data_mahasiswa->agama=='Islam')echo "selected"; ?>>Islam</option>
                        <option value="Kristen" <?php if ($data_mahasiswa->agama=='Kristen')echo "selected"; ?>>Kristen</option>
                        <option value="Khatolik" <?php if ($data_mahasiswa->agama=='Khatolik')echo "selected"; ?>>Khatolik</option>
                        <option value="Hindu" <?php if ($data_mahasiswa->agama=='Hindu')echo "selected"; ?>>Hindu</option>
                        <option value="Buddha" <?php if ($data_mahasiswa->agama=='Buddha')echo "selected"; ?>>Buddha</option>
                        <option value="Khonghucu" <?php if ($data_mahasiswa->agama=='Khonghucu')echo "selected"; ?>>Khonghucu</option>
                      </select>
                    </td>
                    <td>Prodi</td>
                    <td>
                       <select class="form-control" name="prodi">
                        <?php foreach($data_prodi as $prodi) {?>
                          <option value="<?= $prodi->id_prodi?>" <?php if ($data_mahasiswa->id_prodi==$prodi->id_prodi)echo "selected"; ?>> <?= $prodi->nama_prodi?></option>
                        <?php }?>
                       </select>
                    </td>
                  </tr>
                </table>
                  <tr>
                    <td colspan="2">
                       
                        <button type="submit" class="form-control btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Edit Data</button>            
                    
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



