<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.js"
    defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $('#foodItemsTable').DataTable({

        pageLength: 10,
        language: {
            oPaginate: {
                sNext: '<i class="fa fa-forward"></i>',
                sPrevious: '<i class="fa fa-backward"></i>',
                sFirst: '<i class="fa fa-step-backward"></i>',
                sLast: '<i class="fa fa-step-forward"></i>'
            }
        },
        columnDefs: [{
            targets: 2,
            render: function(data, type, row) {
                return data.substr(0, 42) + '…'
            }
        }],
    });
</script>
<script>
    $(document).ready(function() {
        $('#reservationItemTable').DataTable({
            pagingType: 'simple',
            pageLength: 10,
            language: {
                oPaginate: {
                    sNext: '<i class="fa fa-forward"></i>',
                    sPrevious: '<i class="fa fa-backward"></i>',
                    sFirst: '<i class="fa fa-step-backward"></i>',
                    sLast: '<i class="fa fa-step-forward"></i>'
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#reservationsTable').DataTable({
            dom: 'Bfrltrp',
            pagingType: 'simple',
            responsive: true,
            searching: false,
            pageLength: 10,
            language: {
                oPaginate: {
                    sNext: '<i class="fa fa-forward"></i>',
                    sPrevious: '<i class="fa fa-backward"></i>',
                    sFirst: '<i class="fa fa-step-backward"></i>',
                    sLast: '<i class="fa fa-step-forward"></i>'
                }
            }
        });
        $('#reservationsTable_wrapper').addClass('col-span-12');
        $('#reservationsTable_info')
            .addClass('text-white');
    });
</script>
<script>
    $(document).ready(function() {
        $('#reservationsBookedForToday').DataTable({
            pagingType: 'simple',
            pageLength: 10,
            language: {
                oPaginate: {
                    sNext: '<i class="fa fa-forward"></i>',
                    sPrevious: '<i class="fa fa-backward"></i>',
                    sFirst: '<i class="fa fa-step-backward"></i>',
                    sLast: '<i class="fa fa-step-forward"></i>'
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        if ($(window).width() < 940) {
            $('#sidebar').toggleClass('offcanvas-start');
            $(".page").toggleClass('ml');
            $(".page").toggleClass('no-ml');
            $('#toggleNavBtn').click(function() {
                $('#sidebar').toggleClass('offcanvas-start');
                $(".page").toggleClass('ml');
                $(".page").toggleClass('no-ml');
            });
        } else {
            $('#toggleNavBtn').click(function() {
                $('#sidebar').toggleClass('offcanvas-start');
                $(".page").toggleClass('ml');
                $(".page").toggleClass('no-ml');
            });
        }
    });
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
<script>
    $('#needConfirmingAlertCloseBtn').click(function() {
        $('#needConfirmingAlert').slideToggle();
    });
</script>
<script>
    $('#viewReservationBeforeConfirmationButton').click(function() {
        $('#reservationBeforeConfirmationModal').addClass('show')
    });
</script>

<!-- End custom js for this page -->
