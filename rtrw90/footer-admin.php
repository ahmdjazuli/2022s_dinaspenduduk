
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="../assets/plugins/datatables-select/js/dataTables.searchPanes.min.js"></script>
<script src="../assets/plugins/datatables-select/js/dataTables.select.min.js"></script>
<script src="../assets/plugins/datatables-select/js/select.bootstrap4.min.js"></script>
<script src="../assets/js/adminlte.min.js"></script>
<script src="../assets/js/woke.js"></script>
<script src="../assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="../assets/js/alert.js"></script>

<!-- notifikasi -->
<?php

  if ($_GET['m'] == "gagal") {?>
    <script> gagalnih(); </script>
  <?php } 

  if ($_GET['m'] == "simpan") {?>
    <script> simpandong(); </script>
  <?php }

  if ($_GET['m'] == "ubah") {?>
    <script> ubahPenampilanRasengan();</script>
  <?php }

  if ($_GET['m'] == "mana") {?>
    <script> manaWoy(); </script>
  <?php }

  if ($_GET['m'] == "gakada") {?>
    <script> yaallah(); </script>
  <?php }

  if ($_GET['m'] == "info") {?>
    <script> nasib(); </script>
  <?php }

  if ($_GET['m'] == "hapus") {?>
    <script> hapuscinta(); </script>
  <?php } 
?>
<script src="../assets/js/button.js"></script>
<script>
   $(function(){
      var path = window.location.href;
      $('nav a').each(function(){ 
         if(this.href === path){
            $(this).addClass('active');
         }
      });
   });
</script>
</body>
</html>
