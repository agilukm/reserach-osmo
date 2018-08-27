<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edgesss">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ url('/') }}/assets/logo_upi75.png">

    <title>E-OSMOSYS | Login</title>

    <link rel="stylesheet" href="{{ url('/') }}/assets/login/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/login/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="{{ url('/') }}/assets/login/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/login/css/neon-core.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/login/css/neon-theme.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/login/css/neon-forms.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/login/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.5/sweetalert2.css">

    <script src="{{ url('/') }}/assets/login/js/jquery-1.11.3.min.js"></script>

    <!--[if lt IE 9]><script src="{{ url('/') }}/assets/login/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body login-page login-form-fall" data-url="http://neon.dev">


<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '{{url('/')}}';
var loginUrl = '{{ route('login') }}';
</script>

<div class="login-container">

    <div class="login-header login-caret">

        <div class="login-content">

            <a href="#" class="logo">

            <p style="font-size:32px;"><B><STRONG></STRONG></B></p>
            </a>
            <center>
                 <img src="{{ url('/') }}/assets/Untitled-1.png" width="300px">
            </center>
            <p class="description">Silahkan Login terlebih dahulu!</p>

            <!-- progress bar indicator -->
            <div class="login-progressbar-indicator">
                <h3>43%</h3>
                <span>logging in...</span>
            </div>
        </div>

    </div>

    <div class="login-progressbar">
        <div></div>
    </div>

    <div class="login-form">

        <div class="login-content">


            <form method="post" role="form" id="form_login" action="{{ route('login') }}">
                @csrf
                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-user"></i>
                        </div>

                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" />
                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-key"></i>
                        </div>

                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
                    </div>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-login">
                        <i class="entypo-login"></i>
                        Login In
                    </button>
                </div>

            </form>
        </div>

    </div>

</div>


    <!-- Bottom scripts (common) -->
    <script src="{{ url('/') }}/assets/login/js/gsap/TweenMax.min.js"></script>
    <script src="{{ url('/') }}/assets/login/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
    <script src="{{ url('/') }}/assets/login/js/bootstrap.js"></script>
    <script src="{{ url('/') }}/assets/login/js/joinable.js"></script>
    <script src="{{ url('/') }}/assets/login/js/resizeable.js"></script>
    <script src="{{ url('/') }}/assets/login/js/neon-api.js"></script>
    <script src="{{ url('/') }}/assets/login/js/jquery.validate.min.js"></script>
    <script src="{{ url('/') }}/assets/login/js/neon-login.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.5/sweetalert2.all.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="{{ url('/') }}/assets/login/js/neon-custom.js"></script>


    <!-- Demo Settings -->
    <script src="{{ url('/') }}/assets/login/js/neon-demo.js"></script>
    @if ($errors->has('email') || $errors->has('password'))
    <script type="text/javascript">
        swal({
          title: 'Error!',
          text: 'Username / Password Salah',
          type: 'error',
          confirmButtonText: 'Cool'
        });
    </script>
    @endif
</body>
</html>
