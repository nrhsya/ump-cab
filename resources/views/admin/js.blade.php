<script src="admin/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="admin/js/off-canvas.js"></script>
  <script src="admin/js/hoverable-collapse.js"></script>
  <script src="admin/js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="admin/vendors/chart.js/Chart.min.js"></script>
  <script src="admin/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="admin/js/dashboard.js"></script>

  {{-- sweet alert js --}}
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @if (session('success'))
      <script>
        swal("Successful" ,"{{ session('success') }}", "success")
      </script>
  @endif

  @if (session('failed'))
      <script>
        swal("Rejected" ,"{{ session('failed') }}", "error")
      </script>
  @endif

  <!-- running time -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
var timestamp = '<?=time();?>';
function updateTime(){
  $('#time').html(Date(timestamp));
  timestamp++;
}
$(function(){
  setInterval(updateTime, 1000);
});
</script>

  <!-- End custom js for this page-->