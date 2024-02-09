						
 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="#">JuxCom</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
      
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?=base_url('_asset/jquery/dist/jquery.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('_asset/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- SlimScroll -->
<script src="<?=base_url('_asset/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?=base_url('_asset/fastclick/lib/fastclick.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('_asset/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('_asset/dist/js/demo.js') ?>"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  });

//   $(document).on("click", "#tomboledit", function() {
//   let id = $(this).data('id');
//   let nip = $(this).data('nip');
//   let nama = $(this).data('nama');
//   let tmplahir = $(this).data('tmplahir');
//   let tglLahir = $(this).data('tglLahir');
//   let jk = $(this).data('jk');
//   let alamat = $(this).data('alamat');
//   let pangkat = $(this).data('pangkat');
//   let email = $(this).data('email');
//   let telp = $(this).data('telp');
//   let foto = $(this).data('foto');

//   $(".modal-body #id_pegawai").val(id); //kalau inputnya adalah SPAN maka VAL harus diganti dengan TEXT
//   $(".modal-body #nip").val(nip);
//   $(".modal-body #nama").val(nama);
//   $(".modal-body #tempatLahir").val(tmplahir);
//   $(".modal-body #tgl_Lahir").val(tglLahir);
//   $(".modal-body #jk").val(jk);
//   $(".modal-body #alamat").val(alamat);
//   $(".modal-body #pangkat").val(pangkat);
//   $(".modal-body #email").val(email);
//   $(".modal-body #noTelpon").val(telp);
//   $(".modal-body #foto").val(foto);
 
    
// });
</script>


</body>
</html>


