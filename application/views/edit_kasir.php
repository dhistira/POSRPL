<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Edit Kasir - <?= $this->session->userdata('tipe') == 1 ? 'Admin' : 'Kasir'; ?> Fremilt</title>

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
  <script type="text/javascript" src="<?= base_url(); ?>datatables/datatables.min.js"></script>

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
            <h1>Edit Kasir</h1>
          </div>

          <div class="section-body">
            <h2 class="section-title">Edit Kasir</h2>
            <p class="section-lead">
              Edit Kasir.
            </p>

            <div class="row">
              <div class="col-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Edit Kasir</h4>
                    <div class="card-header-action">
                      <a href="<?= base_url(); ?>page/manajemen-kasir" class="btn active">Kembali</a>
                    </div>
                  </div>
                  <div class="card-body">
                  <?php foreach($data as $b){?>
                    <?= isset($_GET['s']) == 'false' ? '<div class="alert alert-danger">Oops! Terjadi error!</div>' : '';?>
                    <form method="post" action="<?= base_url(); ?>page/action_edit_kasir/<?= $b->id ?>">
                      <div class="form-group">
                        <label>Nama Kasir</label>
                        <input type="text" name="namakasir" placeholder="Masukan Nama Kasir" class="form-control" value="<?= $b->fullname;?>">
                      </div>
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="usernamekasir" placeholder="Masukan Username Kasir" class="form-control" value="<?= $b->username;?>">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="passwordkasir" placeholder="kosongkan bila tidak diisi" class="form-control">
                      </div>
                      <div class="form-group">
                        <button type="submit" style="float:right" class="btn btn-danger">Kirim</button>
                      </div>
                    </form>
                  <?php } ?>
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
  <script src="<?= base_url(); ?>assets/modules/popper.js"></script>
  <script src="<?= base_url(); ?>assets/modules/tooltip.js"></script>
  <script src="<?= base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url(); ?>assets/modules/moment.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/stisla.js"></script>
  <script src="<?= base_url(); ?>assets/modules/jquery.sparkline.min.js"></script>
  <script src="<?= base_url(); ?>assets/modules/chart.min.js"></script>

    <!-- Page Specific JS File -->
  <script src="<?= base_url(); ?>assets/js/page/components-statistic.js"></script>
  
  <!-- Template JS File -->
  <script src="<?= base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?= base_url(); ?>assets/js/custom.js"></script>
</body>
</html>