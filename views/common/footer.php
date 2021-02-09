</div>
<!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 footer-copyright">
                <p class="mb-0">Copyright 2020 © obavisto.com.br.</p>
              </div>

            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/js/datatable/datatables/datatable.custom.js"></script>
    <!-- <script src="assets/js/custom-card/custom-card.js"></script> -->
    <script src="assets/js/tooltip-init.js"></script>
    <script src="assets/alertify/alertify.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/script-acto.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
    <?php 
    if(sessionVar('notify')){
      $_notify = sessionVar('notify');
      echo '<script type="text/javascript">'."\n";
      //echo 'setTimeout(function (){'."\n";
      echo "alertify.".$_notify['type']."(\"".addslashes($_notify['message'])."\");";
      unset($_SESSION['notify']);
      //echo "\n}, 1000);";
      echo "\n</script>";
    }
    ?>
  </body>
</html>
