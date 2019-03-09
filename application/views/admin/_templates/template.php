<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('X-Powered-By: suppachok_sin@nstru.ac.th');
header('X-XSS-Protection: 1');
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Vary: Accept-Encoding');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php if (isset($header)) echo $header; ?>
</head>

<body id="page-top">
  <div class="animsition">
  <!--  class="wrapper animsition" -->
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <?php if (isset($sidebar_menu)) echo $sidebar_menu; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

<?php
if (isset($topbar_menu))
{
    echo $topbar_menu;
}

if (isset($control_sidebar) AND $admin_prefs['ctrl_sidebar'] == TRUE)
{
    echo $control_sidebar;
}

?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <?php if (isset($content)) echo $content; ?>
        </div>
        <!-- /.container-fluid -->

    </div>
        <!-- End of Main Content -->
<?php
if (isset($footer))
{
    echo $footer;
}
?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url($templates_dir . 'vendor/jquery/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url($templates_dir . 'vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url($templates_dir . 'vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url($templates_dir . 'js/sb-admin-2.min.js'); ?>"></script>

  <script src="<?php echo base_url($plugins_dir . '/animsition/js/animsition.min.js'); ?>" charset="utf-8"></script>

  <script>
  $(document).ready(function() {
    $('.animsition').animsition();
  });
  </script>

</body>

</html>
