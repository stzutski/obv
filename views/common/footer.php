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
    <script src="assets/js/form-validation-custom.js"></script>
    <script src="assets/js/masks.js"></script>
    <script src="assets/js/modal-animated.js"></script>
    <!-- <script src="assets/js/custom-card/custom-card.js"></script> -->
    <script src="assets/js/tooltip-init.js"></script>
    <script src="assets/alertify/alertify.min.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <?php 
    if(USERLEVEL=='master'){
      echo '<script src="assets/js/script-acto.js"></script>';
    }
    elseif(USERLEVEL=='admin'){
      echo '<script src="assets/js/script-admin.js"></script>';
    }
    elseif(USERLEVEL=='cliente'){
      echo '<script src="assets/js/counter/jquery.waypoints.min.js"></script>';
      echo '<script src="assets/js/counter/jquery.counterup.min.js"></script>';
      echo '<script src="assets/js/cliente.js"></script>';
    }
    else{
      echo '<script src="assets/js/cliente.js"></script>';
    }
    ?>
    <!-- login js-->
    <!-- Plugin used-->
    <?php 
    echo notifyJs();
    echo showErrorForms($_erroForm);
    ?>
  </body>
</html>
