<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>MY APP</title>

    <link rel="apple-touch-icon" href="{{ asset('template/assets/images/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('template/assets/images/favicon.ico') }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('template/global/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/global/css/bootstrap-extend.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/site.min.css') }}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('template/global/vendor/animsition/animsition.css') }}">
    <link rel="stylesheet" href="{{ asset('template/global/vendor/asscrollable/asScrollable.css') }}">
    <link rel="stylesheet" href="{{ asset('template/global/vendor/switchery/switchery.css') }}">
    <link rel="stylesheet" href="{{ asset('template/global/vendor/intro-js/introjs.css') }}">
    <link rel="stylesheet" href="{{ asset('template/global/vendor/slidepanel/slidePanel.css') }}">
    <link rel="stylesheet" href="{{ asset('template/global/vendor/jquery-mmenu/jquery-mmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('template/global/vendor/flag-icon-css/flag-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('template/global/vendor/waves/waves.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/examples/css/pages/login-v3.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('template/global/fonts/material-design/material-design.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/global/fonts/brand-icons/brand-icons.min.css') }}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    <script src="{{ asset('template/global/vendor/breakpoints/breakpoints.js') }}"></script>
    <script>
        Breakpoints();
    </script>
    <style>
        #stok {
            max-width: 41px;
            max-height: 40px;
            background-color: white;
            border-radius: 3px;
            padding-top: -1px;
            position: absolute;
            top: 17%;
            left: 64%;
            margin: 10px
        }
    </style>
</head>

<body class="animsition page-login-v3 layout-full">

    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="panel">
                <div class="panel-body">
                    <div class="brand">
                        <img class="brand-img" src="{{ asset('template/assets/images/logo-colored.png') }}" alt="...">
                        <h2 class="brand-text font-size-18">MY APP</h2>
                    </div>
                    <div id="auth">

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- End Page -->

    <!-- Core  -->
    <script src="{{ asset('template/global/vendor/babel-external-helpers/babel-external-helpers.js') }}"></script>
    <script src="{{ asset('template/global/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('template/global/vendor/popper-js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('template/global/vendor/animsition/animsition.js') }}"></script>
    <script src="{{ asset('template/global/vendor/mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('template/global/vendor/asscrollbar/jquery-asScrollbar.js') }}"></script>
    <script src="{{ asset('template/global/vendor/asscrollable/jquery-asScrollable.js') }}"></script>
    <script src="{{ asset('template/global/vendor/waves/waves.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('template/global/vendor/jquery-mmenu/jquery.mmenu.min.all.js') }}"></script>
    <script src="{{ asset('template/global/vendor/switchery/switchery.js') }}"></script>
    <script src="{{ asset('template/global/vendor/intro-js/intro.js') }}"></script>
    <script src="{{ asset('template/global/vendor/screenfull/screenfull.js') }}"></script>
    <script src="{{ asset('template/global/vendor/slidepanel/jquery-slidePanel.js') }}"></script>
    <script src="{{ asset('template/global/vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('template/global/js/Component.js') }}"></script>
    <script src="{{ asset('template/global/js/Plugin.js') }}"></script>
    <script src="{{ asset('template/global/js/Base.js') }}"></script>
    <script src="{{ asset('template/global/js/Config.js') }}"></script>

    <script src="{{ asset('template/assets/js/Section/Menubar.js') }}"></script>
    <script src="{{ asset('template/assets/js/Section/Sidebar.js') }}"></script>
    <script src="{{ asset('template/assets/js/Section/PageAside.js') }}"></script>
    <script src="{{ asset('template/assets/js/Section/GridMenu.js') }}"></script>

    <!-- Config -->
    <script src="{{ asset('template/global/js/config/colors.js') }}"></script>
    <script src="{{ asset('template/assets/js/config/tour.js') }}"></script>
    <script>
        Config.set('assets', "{{ asset('template/assets') }}");
    </script>

    <!-- Page -->
    <script src="{{ asset('template/assets/js/Site2.js') }}"></script>
    <script src="{{ asset('template/global/js/Plugin/asscrollable.js') }}"></script>
    <script src="{{ asset('template/global/js/Plugin/slidepanel.js') }}"></script>
    <script src="{{ asset('template/global/js/Plugin/switchery.js') }}"></script>
    <script src="{{ asset('template/global/js/Plugin/jquery-placeholder.js') }}"></script>
    <script src="{{ asset('template/global/js/Plugin/material.js') }}"></script>

    <script type="text/javascript" src="{{ asset('sweetalert2/dist/sweetalert2.all.min.js') }}"></script>

    <script>
        (function(document, window, $) {
            'use strict';

            var Site = window.Site;
            $(document).ready(function() {
                Site.run();
            });
        })(document, window, jQuery);
    </script>

    <script>
        $(document).ready(function() {
            login();
        });
        /* $(document).ajaxStart(function() {
            openLoading();
        });
        $(document).ajaxComplete(function() {
            closeLoading();
        }); */

        function openLoading() {
            Swal.fire({
                title: 'Loading...',
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading();
                },
            })
        }

        function closeLoading() {
            Swal.close();
        }

        function login() {
            $.ajax({
                url: `{{ route('login.show') }}`,
                type: 'get',
                dataType: 'html',
                success: function(html) {
                    $("#auth").html(html);
                },
                error: function() {
                    alert("Error");
                }
            });
        }

        function register() {
            $.ajax({
                url: `{{ route('register.show') }}`,
                type: 'get',
                dataType: 'html',
                success: function(html) {
                    $("#auth").html(html);
                },
                error: function() {
                    alert("Error");
                }
            });
        }
    </script>

</body>

</html>
