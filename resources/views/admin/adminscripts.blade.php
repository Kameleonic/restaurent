<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script type="text/javascript"
    src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.js"
    defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.5.1/moment.min.js"
    integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA=="
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
        $('#currentEmployeeTable').addClass(
            'opacity-0');
        $('#currentEmployeeTable').DataTable({
            dom: 'Bfritrp',
            pagingType: 'simple',
            searching: false,
            responsive: true,
            pageLength: 5,
            language: {
                oPaginate: {
                    sNext: '<i class="fa fa-forward"></i>',
                    sPrevious: '<i class="fa fa-backward"></i>',
                    sFirst: '<i class="fa fa-step-backward"></i>',
                    sLast: '<i class="fa fa-step-forward"></i>'
                }
            }
        });
        $('#currentEmployeeTable').delay(1000).removeClass("opacity-0", 1000);
        $('#currentEmployeeTable_wrapper').addClass(
            'border border-accentFade transition-duration-500 text-white col-span-8 dash-panel-static');
        $('.dt-button').addClass('dt-buttonS');
        $("<div class='-translate-y-4 mr-2 mb-1 flex justify-content-center text-lg font-bold'><div class='-mb-10 bg-slate-800 border-l-2 border-r-2 border-slate-800 border-t-2 pb-2 px-2 rounded-top'>Employees Table</div></div>")
            .insertAfter(
                ".dt-buttons");


    });
</script>
<script>
    $(document).ready(function() {
        $('#currentEmployeeTable2').DataTable({
            dom: 'Bfrtrp',
            pagingType: 'simple',
            searching: false,
            responsive: true,
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
        $('#currentEmployeeTable_wrapper').addClass('col-span-12');
        $('.dt-button').addClass('dt-buttonS');
        $('#currentEmployeeTable_wrapper')
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
{{-- <script>
    $(document).ready(function() {
        var interval = setInterval(function() {
            var momentNow = moment();
            $('#date-part').html(momentNow.format('YYYY MMMM DD') + ' ' +
                momentNow.format('dddd')
                .substring(0, 3).toUpperCase());
            $('#time-part').html(momentNow.format('A hh:mm:ss'));
        }, 100);

        $('#stop-interval').on('click', function() {
            clearInterval(interval);
        });
    });
</script> --}}
<!-- End custom js for this page -->
