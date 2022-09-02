<!-- plugins:js -->
{{-- <script src="assets/vendors/js/vendor.bundle.base.js"></script> --}}

<!-- endinject -->
<!-- Plugin js for this page -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/b-2.2.3/datatables.min.js"></script>


<script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
{{-- <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script> --}}
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<script src="admin/assets/js/off-canvas.js"></script>
<script src="admin/assets/js/hoverable-collapse.js"></script>
<script src="admin/assets/js/misc.js"></script>
<script src="admin/assets/js/settings.js"></script>
<script src="admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="admin/assets/js/dashboard.js"></script>
<script>
    $(document).ready(function() {
        $('#menu_items').DataTable({
            columnDefs: [{
                targets: 2,
                render: function(data, type, row) {
                    return data.substr(0, 42) + '…'
                }
            }]
        });
    });
</script>

<!-- End custom js for this page -->
