<footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
</footer>

<!-- jQuery -->
<script src="<?= base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?= base_url()?>assets/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= base_url()?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>assets/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url()?>assets/dist/js/pages/dashboard3.js"></script>

<script src="<?= base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
   function deleteScript(url) {
      $('#btn-delete').attr('href', url);
    }

  $(function () {
    $("#list-data").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  $(document).ready(function() {
        // even ketika link a href diklik
        $('.detail-mahasiswa').on("click", function(){
        // ambil nilai id dari link detail simpan dalam var DataMahasiswa
        var dataPelaporan= this.id;
        // Pecah DataMahasiswa dengan tanda | sebagai pemisah data hasilnya
        // disimpan dalam array datanya
        var datanya = dataPelaporan.split("|");
        // Untuk pengujian data
        if (datanya[5]=='P') { var gender='Perempuan';} else {var gender='Laki-Laki';}
        // bagian ini yang akan ditampilkan pada modal bootstrap
        // pengetikan HTML tidak boleh dienter, karena oleh javascript akan dibaca \r\n sehingga
        // modal bootstrap tidak akan jalan
        $("#IsiModal").html('<table class="table"><tr></tr><tr><td width="350">NIM</td><td width="10">:</td><td>'+datanya[0]+'</td></tr><tr><td>Nama Lengkap</td><td>:</td><td>'+datanya[1]+'</td></tr><tr><td>Prodi</td><td>:</td><td>'+datanya[2]+'</td></tr><tr><td>Fakultas</td><td>:</td><td>'+datanya[3]+'</td></tr><tr><td>Alamat</td><td>:</td><td>'+datanya[4]+'</td></tr><tr><td>Gender</td><td>:</td><td>'+gender+'</td></tr><tr><td>Tanggal Lahir</td><td>:</td><td>'+datanya[6]+'</td></tr><tr><td>Agama</td><td>:</td><td>'+datanya[7]+'</td></tr></table>');
        });
   
    });
    
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
 <?php if ($this->session->flashdata('flash_data')): ?>
    <script>
    Swal.fire({
    title: "",
    text: "<?php echo $this->session->flashdata('flash_data'); ?>",
    timer: 10000,
    showConfirmButton: true,
    type: 'success'
    }).catch(swal.noop);
    </script>
    <?php endif; ?>
