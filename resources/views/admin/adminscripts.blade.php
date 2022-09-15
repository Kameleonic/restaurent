<!-- plugins:js -->
{{-- <script src="assets/vendors/js/vendor.bundle.base.js"></script> --}}

<!-- endinject -->
<!-- Plugin js for this page -->



<script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
<script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
{{-- <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script> --}}
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.12.1/b-2.2.3/datatables.min.js"></script>
<script src="admin/assets/js/off-canvas.js"></script>
<script src="admin/assets/js/hoverable-collapse.js"></script>
<script src="admin/assets/js/misc.js"></script>
<script src="admin/assets/js/settings.js"></script>
<script src="admin/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="admin/assets/js/dashboard.js"></script>
{{-- <script>
    $(document).ready(function() {
        $('#menu_items').DataTable({
            columnDefs: [{
                targets: 2,
                render: function(data, type, row) {
                    return data.substr(0, 42) + '…'
                }
            }]
        });
    }); --}}
</script>
<script>
    $('input#submit').click(function(e) {
        e.preventDefault();
        var text = $('#mytext').val();
        var url = 'your url' //we were using Link/addlink in the other example

        $.ajax({
            type: "POST",
            url: url,
            data: {
                mytext: text
            },
            success: function() {
                //Probably add the code to close your modal box here if successful
                $('#linkSettings').hide();
            },
        });
    });
</script>

<!-- End custom js for this page -->
