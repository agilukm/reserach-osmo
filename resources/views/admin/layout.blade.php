<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edgezz">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="{{ url('/') }}/assets/favicon.png">

    <title>E-OSMOSYS</title>
    <script type="text/javascript">
    var site_url = '{{ url('/') }}';
    </script>
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/css/neon-core.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/css/neon-theme.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/css/neon-forms.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/css/custom.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/js/select2/select2-bootstrap.css" id="style-resource-1">
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/js/select2/select2.css" id="style-resource-2">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/ionicons-2.0.1/css/ionicons.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/plugins/jquery-upload-file/uploadfile.css">
    <link rel="stylesheet" href="{{ url('/') }}/js/lib/sweetalert/sweetalert.css">
    <script src="{{ url('/') }}/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ url('/') }}/assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="{{ url('/') }}/assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ url('/') }}/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="{{ url('/') }}/assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="{{ url('/') }}/assets/plugins/fastclick/fastclick.js"></script>
    <!-- Upload File -->
    <script src="{{ url('/') }}/assets/plugins/jquery-upload-file/jquery.uploadfile.js"></script>
    <!-- Upload File -->
    <script src="{{ url('/') }}/assets/plugins/jquery-upload-file/main.js"></script>



</head>

<body class="page-body  page-fade" data-url="http://neon.dev">


    <div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

        <div class="sidebar-menu">

            <div class="sidebar-menu-inner">

                <header class="logo-env">

                    <!-- logo -->
                    <div class="logo">
                        <a href="#">
                            <h2><strong>E-OSMOSYS</strong></h2>
                        </a>
                    </div>

                    <!-- logo collapse icon -->
                    <div class="sidebar-collapse">
                        <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>


                    <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                    <div class="sidebar-mobile-menu visible-xs">
                        <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                            <i class="entypo-menu"></i>
                        </a>
                    </div>

                </header>


                <ul id="main-menu" class="main-menu">
                    <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                    <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->

                    <li class="header">MENU</li>

                    <li>
                        <a href="{{ url('/') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
                    </li>

                    <li>
                        <a href="{{ url('/') }}/perusahaan"><i class="fa fa-desktop" aria-hidden="true"></i> <span>Perusahaan</span></a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}/skttk"><i class="fa fa-user" aria-hidden="true"></i> <span>Skttk</span></a>
                    </li>

                    <li>
                        <a href="{{ url('/') }}/pembangkit"><i class="fa fa-cogs" aria-hidden="true"></i> <span>Pembangkit</span></a>
                    </li>

                    <li>
                        <a href="{{ url('/') }}/laporan"><i class="fa fa-file" aria-hidden="true"></i> <span>Laporan</span></a>
                    </li>


                </ul>

            </div>

        </div>
        <div class="main-content">

            <div class="row">

                <!-- Profile Info and Notifications -->
                <div class="col-md-6 col-sm-8 clearfix">

                    <ul class="user-info pull-left pull-none-xsm">

                        <!-- Profile Info -->
                        <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ url('/') }}/assets/favicon.png" alt="" class="img-circle" width="44" />
                                <?php //echo $_SESSION["nama"] ?>
                            </a>
                            <strong> {{Auth::user()->name}} </strong>
                            <ul class="dropdown-menu">

                                <!-- Reverse Caret -->
                                <li class="caret"></li>

                                <!-- Profile sub-links -->
                                <li>
                                    <a href="Password">
                                        <i class="entypo-user"></i>
                                        Ganti Password
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>



                </div>


                <!-- Raw Links -->
                <div class="col-md-6 col-sm-4 clearfix hidden-xs">

                    <ul class="list-inline links-list pull-right">

                        <!-- Language Selector -->


                        <li class="sep"></li>

                        <li>
                            <a href="Password">
                                <i class="entypo-user"></i>
                                Ganti Password
                            </a>
                        </li>


                        <li class="sep">

                        </li>

                        <li>
                            <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Log Out <i class="entypo-logout right"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>

            </div>

        </div>

        <hr />
        @yield('content')

        <!-- Footer -->
        <footer class="main">

            &copy; {{date('Y')}} <strong>ESDM</strong> E-OSMOSYS

        </footer>
    </div>



    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/js/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/dist/js/rickshaw/rickshaw.min.css">

    <!-- Bottom scripts (common) -->
    <script src="{{ url('/') }}/assets/dist/js/gsap/TweenMax.min.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/bootstrap.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/joinable.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/resizeable.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/neon-api.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


    <!-- Imported scripts on this page -->
    <script src="{{ url('/') }}/assets/dist/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/jquery.sparkline.min.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/rickshaw/vendor/d3.v3.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/rickshaw/rickshaw.min.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/raphael-min.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/morris.min.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/toastr.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/neon-chat.js"></script>
    <!-- JavaScripts initializations and stuff -->
    <script src="{{ url('/') }}/assets/dist/js/neon-custom.js"></script>
    <script src="{{ url('/') }}/assets/dist/js/select2/select2.min.js"></script>
    <script src="{{ url('/') }}/js/lib/sweetalert/sweetalert.min.js"></script>

    @yield('plugin')

    <script type="text/javascript">

    $('.daterangepickerz').daterangepicker({
        singleDatePicker: true
    });

    var table = $('#myTable').DataTable();
    $('select').select2({
        language: "id",
        placeholder: "Pilih",
        allowclear: true
    });

    $('.conf').click( function() {
        console.log($('#value'+this.id).val(), this.id, this.name);
        var conf = confirm($('#value'+this.id).val(), this.id, this.name);
    });

    function confirm(uri, id, name){
        swal({
            title: "Data akan di"+name,
            text: "Apakah anda yakin?",
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonText: "Yakin",
            cancelButtonText: "Batal",
            confirmButtonColor: "#ec6c62"
        }, function (isConfirm) {
            if (!isConfirm) return;
            table.row($('.'+id)).remove().draw( false );
            $.ajax({
                url: uri,
                type: "DELETE",
                dataType: "html",
                success: function () {
                    var asd = table.row($('.'+id)).remove().draw( false );
                    if(asd)
                    {
                        swal("Behasil!", "Data berhasil di"+name, "success");
                    }
                },

                error: function (xhr, ajaxOptions, thrownError) {
                    swal("Behasil!", "Data berhasil di"+name, "success");
                }
            });
        });
    }
    </script>

    @if(session()->has('message'))
    <script type="text/javascript">
    swal("Behasil!", "{{ session()->get('message') }}", "success", 3000, false);
    </script>
    @endif

    @if($errors->any())
    <script type="text/javascript">
    $(window).on('load',function(){
        $('#errormodal').modal('show');
    });
    </script>
    @endif


    <!-- Demo Settings -->

</body>
</html>
