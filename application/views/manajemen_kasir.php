<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Manajemen Kasir - <?= $this->session->userdata('tipe') == 1 ? 'Admin' : 'Kasir'; ?> Fremilt</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/components.css">
  <!-- /END GA -->

  <!-- DATATABLES -->
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>datatables/datatables.min.css"/>

</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <div class="form-inline mr-auto">
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="<?= base_url(); ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('fullname'); ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="<?php echo site_url('login/logout');?>" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <?php include 'include/sidebar.php';?>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Manajemen Kasir</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Manajemen Kasir</h2>
            <p class="section-lead">
              Silahkan menambahkan, mengedit, atau menghapus daftar menu.
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Manajemen Kasir</h4>
                    <div class="card-header-action">
                      <a href="<?= base_url(); ?>page/tambah_kasir" class="btn active">Tambah Kasir</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <?php if(isset($_GET['s'])){
                      if($_GET['s'] == 'true'){
                      echo '<div class="alert alert-success">Berhasil! Data berhasil diupdate</div>';
                      } else if ($_GET['s'] == 'notfound'){
                      echo '<div class="alert alert-danger">Data Tidak Ditemukan!</div>';
                      } else if ($_GET['s'] == 'false'){
                      echo '<div class="alert alert-danger">Oops! Terjadi Kesalahan</div>';
                      }}?>
                      <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID Kasir</th>
                                <th>Nama Kasir</th>
                                <th>Username</th>
                                <th>Tanggal Bergabung</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php foreach($data as $b) {
                            echo '<tr>
                                <td>'.$b->id.'</td>
                                <td>'.$b->fullname.'</td>
                                <td>'.$b->username.'</td>
                                <td>'.$b->date_created.'</td>
                                <td><a href="'.base_url().'page/edit_kasir/'.$b->id.'">Edit</a> - <a href="#" onclick="delete_kasir('.$b->id.');">Hapus</a></td>
                            </tr>';
                          }?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID Item</th>
                                <th>Nama Item</th>
                                <th>Detail item</th>
                                <th>Harga item</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2019 <div class="bullet"></div> PoS Fremilt</a>
        </div>
        <div class="footer-right">
          
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url(); ?>assets/modules/jquery.min.js"></script>
    <!-- ALERT DELETE -->
  <script type="text/javascript">
    var url = "<?php echo base_url();?>";
    function delete_kasir(id){
      var r=confirm("Apakah anda yakin ingin menghapus data ini?");
        if (r==true){
          window.location = url+"page/delete_kasir/"+id;
        } else {
          return false;
        } 
      }
  </script>
  <script type="text/javascript" src="<?= base_url(); ?>datatables/datatables.min.js"></script>
  <script src="<?= base_url(); ?>assets/modules/popper.js"></script>
  <script src="<?= base_url(); ?>assets/modules/tooltip.js"></script>
  <script src="<?= base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url(); ?>assets/modules/moment.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/stisla.js"></script>
  <script src="<?= base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?= base_url(); ?>assets/modules/chart.min.js"></script>
  
  <!-- CUSTOM DATATABLE -->
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    } );
  </script>
  
  <!-- Template JS File -->
  <script src="<?= base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?= base_url(); ?>assets/js/custom.js"></script>
</body>
</html>