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

  {{-- flowbite js --}}
  <script src="../path/to/flowbite/dist/flowbite.js"></script>

  {{-- core ui --}}
  <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@4.2.0/dist/js/coreui.bundle.min.js" integrity="sha384-n0qOYeB4ohUPebL1M9qb/hfYkTp4lvnZM6U6phkRofqsMzK29IdkBJPegsyfj/r4" crossorigin="anonymous"></script>

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
  
  <script>
    // function deleteBtn(id)
    // {
    //   swal({
    //     title: "Are you sure?",
    //     text: "Once deleted, you will not be able to recover this data!",
    //     icon: "warning",
    //     buttons: true,
    //     dangerMode: true,
    //   })
    //   .then((willDelete) => {
    //     if (willDelete) {
    //       swal("Successful" , "{{ session('success') }}", "success")
    //     } else {
    //       swal("Cancelled" , "Your data is not deleted", "success")
    //     }
    //   });
    // }

    // function deleteBtn(id)
    // {
    //   swal({
    //     title: "Delete?",
    //     text: "Once deleted, you will not be able to recover this data!",
    //     icon: "warning",
    //     showCancelButton: !0,
    //     confirmButtonText: "Yes, delete it!",
    //     cancelButtonText: "No, cancel!",
    //     reverseButtons: !0
    //   }).then(function (e) {
    //     if (e.value === true) {
    //       var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

    //       $.ajax({
    //           type: 'POST',
    //           url: "{{url('/delete')}}/" + id,
    //           data: {_token: CSRF_TOKEN},
    //           dataType: 'JSON',
    //           success: function (results) {

    //               if (results.success === true) {
    //                   swal("Done!", results.message, "success");
    //               } else {
    //                   swal("Error!", results.message, "error");
    //               }
    //           }
    //       });

    //     } else {
    //       e.dismiss;
    //     }
    //   }, function (dismiss) {
    //     return false;
    //   })
    // }
  </script>
  
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

<script>
  // auto close alert messages
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>


  <!-- End custom js for this page-->