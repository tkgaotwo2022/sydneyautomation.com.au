<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?= url('/') ?>/back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="<?= url('/') ?>/back/style.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= url('/') ?>/back/plugins/summernote/summernote-bs4.min.css">
    <!-- Bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>


    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('layouts.navigation')
        @include('layouts.side')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <footer class="main-footer">
            <strong>Copyright &copy; {{ now()->year }} .</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- jQuery -->
    <script src="<?= url('/') ?>/back/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= url('/') ?>/back/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= url('/') ?>/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?= url('/') ?>/back/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <!--<script src="<?= url('/') ?>/back/plugins/sparklines/sparkline.js"></script>-->
    <!-- JQVMap -->
    <script src="<?= url('/') ?>/back/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= url('/') ?>/back/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?= url('/') ?>/back/plugins/moment/moment.min.js"></script>
    <script src="<?= url('/') ?>/back/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= url('/') ?>/back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?= url('/') ?>/back/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= url('/') ?>/back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= url('/') ?>/back/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= url('/') ?>/back/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--<script src="<?= url('/') ?>/back/dist/js/pages/dashboard.js"></script>-->
    <script src="<?= url('/') ?>/back/drag.js"></script>
    <script src="<?= url('/') ?>/back/jquery.js"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.4/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#product_table').DataTable();
        });
    </script>



    <script type="text/javascript">
        $("#thename").keyup(function() {
            var txt = String($("#thename").val()).toLowerCase();
            // txt = txt.replace(/ /g,"_");
            txt = txt.replaceAll(" ", "-");
            txt = txt.replaceAll("%", "-");
            txt = txt.replaceAll("/", "-");
            $("#theslug").val(txt);
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#parentto").change(function() {
                var x = $("#parentto").val();
                if (x == 1) {
                    $("#selectparent").hide();
                    $("#setstage").val(2);
                } else {
                    $("#selectparent").show();
                    $("#setstage").val(3);
                }
            });
        });
    </script>
    <script>
        $(".product_description").summernote({
            height: 500
        });
    </script>



    <!--<script>
        -- >
        <
        !--$(document).ready(function() {
            -- >
            <
            !--$('#productadd').on('click', function(e) {
                -- >
                <
                !--
                if (document.getElementById("pro_name").value) -- >
                    <
                    !--{
                        -- >
                        <
                        !--
                        var slug = document.getElementById("pro_name").value;-- >
                        <
                        !--slug.toLowerCase().trim().replace(/[^\w\s-]/g, '').replace(/[\s_-]+/g, '-')
                        .replace(/^-+|-+$/g, '');-- >

                        <
                        !--alert(slug.toLowerCase().trim().replace(/[^\w\s-]/g, '').replace(/[\s_-]+/g, '-')
                            .replace(/^-+|-+$/g, ''));-- >
                        <
                        !--$(this).off(e);-- >
                        <
                        !--
                    }-- >
                    <
                    !--
            });
            -- >
            <
            !--
        });
        -- >
        <
        !--
    </script>-->

    @if (!request()->product_edit_id)
        <script>
            $('#simple-product').show();
            $('#variable-product').hide();
        </script>
    @endif

    <script>
        $('select[id="select_product_type"]').on('change', function() {

            if ($(this).val() == "Variable Product") {
                $('#simple-product').hide();
                $('#variable-product').show();

            } else {
                $('#simple-product').show();
                $('#variable-product').hide();
            }
        });
    </script>


    <script>
        function addVariant() {

            newrowAdd = "<div class='card text-center mt-4 border border-primary' style='border-width:5px'>" +
                "<div class='card-header'>Enter Additional Informations</div>" +
                "<div class='card-body'>" +
                "<input type='text' class='form-control' placeholder='Field Name' name='variant_name[]'><br>" +
                "<input type='text' class='form-control' placeholder='Field Value' name='variant_price[]'><br>" +
                "</div>" +
                "<button  type='button'  class='btn btn-info' onclick='addVariant()'>Add Additional Informations</button>" +
                "<button  type='button'  class='btn btn-danger' onClick='this.parentNode.parentNode.removeChild(this.parentNode);'>Remove</button>" +
                "</div>";
            $('#newAdd').append(newrowAdd);
        }
    </script>
    <script>
        var product_image = document.getElementById("product_image"),
            product_image_preview = document.getElementById("product_image_preview");
        product_image.addEventListener("change", function() {
            changeImage(this);
        });

        function changeImage(input) {
            var reader;

            if (input.files && input.files[0]) {
                reader = new FileReader();

                reader.onload = function(e) {
                    product_image_preview.setAttribute('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script>
        var product_images = document.getElementById("product_images");
        product_images.addEventListener("change", function() {
            loadFile(this);
        });

        function loadFile(input) {
            for (let i = 0; i < event.target.files.length; i++) {

                var image = document.createElement('img');
                image.setAttribute("class", "mt-3");
                image.src = URL.createObjectURL(event.target.files[i]);
                image.width = "100";

                document.querySelector("#product_images_preview").appendChild(image);
                var spanToChange = document.getElementById("total-images");

                spanToChange.innerHTML = parseInt(spanToChange.innerHTML) + 1;
            }

        }
    </script>

    <script>
        $(document).ready(function() {
            $('.delete_form').on('click', function() {
                if (confirm("Are you sure you want to delete it?")) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>

    <!--           <script src="https://cdnjs.cloudflare.com/ajax/libs/paginationjs/2.6.0/pagination.js"
        integrity="sha512-VE1SVJJWxA3banvl97A4IXikhIwyPWwWAjST8kHzvnUxSI7eoKblUceEpUHGfnuFx+7GszvViiDW9+0NlZJe3A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
        -- >

        <
        !--$('#pagination').pagination({
                -- >
                <
                !--dataSource: function(done) {
                    -- >
                    <
                    !--$.ajax({
                        -- >
                        <
                        !--type: 'GET',
                        -- >
                        <
                        !--url: '{{ route('all_products') }}',
                        -- >
                        <
                        !--success: function(response) {
                                -- >
                                <
                                !--console.log(success);
                                -- >
                                <
                                !--
                            }-- >
                            <
                            !--
                    });
                    -- >
                    <
                    !--
                },
                -- >

                <
                !--
            }) -- >

            <
            !--
    </script>-->






</body>

</html>
