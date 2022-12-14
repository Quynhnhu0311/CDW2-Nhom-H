<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Info Customer | Dashboard </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url ('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url ('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ url ('dist/css/adminlte.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ url ('css/sweetalert.css') }}" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset ('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset ('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Info Customer</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset ('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <?php
                        $name = Session::get('name');
                        if ($name) {
                            echo '<a href="#" class="d-block">' . $name . '</a>';
                        }
                        ?>

                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <?php $id_admin = Session::get('admin_id'); ?>
                <?php $id = Session::get('id'); ?>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>
                                    T??i kho???n c???a t??i
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/file-customer/<?php echo $id ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>H??? S??</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url ('add-info-customer')}}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Th??m th??ng tin H??? S??</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/address-customer/<?php echo $id ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>?????a Ch???</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/edit-pass-customer/<?php echo $id ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>?????i M???t Kh???u</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        @yield('content-customer')

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ url ('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ url ('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url ('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url ('dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ url ('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ url ('plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ url ('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ url ('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <!-- ChartJS -->
    <script src="{{ url ('plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ url ('js/sweetalert.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{ url ('dist/js/demo.js') }}"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="{{ url ('dist/js/pages/dashboard2.js') }}"></script> -->

    <!-------------------------
        Update Order Status
    --------------------------->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.update_order_qty').change(function() {
                var order_status = $(this).val();
                var order_id = $(this).children(":selected").attr("id");
                var _token = $('input[name="_token"]').val();

                order_product_qty = [];
                $("input[name='order_product_qty']").each(function() {
                    order_product_qty.push($(this).val());
                });

                order_product_id = [];
                $("input[name='order_product_id']").each(function() {
                    order_product_id.push($(this).val());
                });

                $.ajax({
                    url: "{{ url('/update-order-qty') }}",
                    method: "POST",
                    data: {
                        order_status: order_status,
                        order_id: order_id,
                        _token: _token,
                        order_product_qty: order_product_qty,
                        order_product_id: order_product_id
                    },
                    success: function(data) {
                        alert("C???p Nh???t ????n H??ng Th??nh C??ng!");
                        // location.reload();
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.update_quantity_product').click(function() {
                var order_prd_id = $(this).data('product_id');
                var order_qty = $('.order_qty_' + order_prd_id).val();
                var order_code = $('.order_code').val();
                var _token = $('input[name="_token"]').val();

                // alert(order_prd_id);
                // alert(order_qty);
                // alert(order_code);
                $.ajax({
                    url: "{{ url('/update-order-qty-product') }}",
                    method: "POST",
                    data: {
                        order_prd_id: order_prd_id,
                        order_qty: order_qty,
                        _token: _token,
                        order_code: order_code
                    },
                    success: function(data) {
                        alert("C???p Nh???t S??? L?????ng Th??nh C??ng!");
                        // location.reload();
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        // $(document).ready(function() {
        //     $('#btnCreateCoupon').click(function(){
        //         var order_prd_id = $(this).data('product_id');
        //         var product_price = $('.product_price').val();
        //         var product_name = $('.product_name').val();
        //         var product_qty = $('.product_qty').val();
        //         var manu_id = $('.manu_id').val();
        //         var type_id = $('.type_id').val();
        //         var feature_id = $('.feature_id').val();
        //         var product_description = $('.product_description').val();
        //         var product_img = $('.product_img').val();
        //         var product_sold = $('.product_sold').val();
        //         var _token = $('input[name="_token"]').val();

        //         var coupon_condition = $('#inputCondition').val();
        //         var coupon_number = $('#inputNumber').val();

        //         if(coupon_condition == 1 && coupon_number < 1000){
        //             swal({
        //                 title: "Error!",
        //                 text: "Your Discount Field Error. Please Re-Enter!",
        //                 cancelButtonText: "OK",
        //                 confirmButtonClass: "btn-success"
        //             });
        //         }
        //         else if(coupon_condition == 2 && coupon_number > 100){
        //             swal({
        //                 title: "Error!",
        //                 text: "Your Discount Field Error. Please Re-Enter!",
        //                 cancelButtonText: "OK",
        //                 confirmButtonClass: "btn-success"
        //             });
        //         }
        //     });
        // });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            var colorDanger = "#FF1744";
            Morris.Donut({
                element: 'donut',
                resize: true,
                colors: [
                    '#E0F7FA',
                    '#B2EBF2',
                    '#80DEEA',
                    '#4DD0E1',
                    '#26C6DA',
                    '#00BCD4',
                    '#00ACC1',
                    '#0097A7',
                    '#00838F',
                    '#006064'
                ],
                //labelColor:"#cccccc", // text color
                //backgroundColor: '#333333', // border color

                /////// v??o Provider ????? t???o bi???n 
                data: [{
                        label: "Product",
                        value: <?php echo $product ?>,
                        color: colorDanger
                    },
                    {
                        label: "Order",
                        value: <?php echo $order ?>
                    },
                    {
                        label: "Protype",
                        value: <?php echo $protype ?>
                    },
                    {
                        label: "Manufacture",
                        value: <?php echo $manu ?>
                    }
                ]
            });
        });
    </script>
    <script>
    $('.btn-manu').click(function() {
        $(this).css('display','none');
    });
    $('.btn-add').click(function() {
        $(this).css('display','none');
    });
</script>
</body>

</html>