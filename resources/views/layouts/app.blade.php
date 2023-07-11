<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap material admin template">
    <meta name="author" content="">

    <title>MY APP</title>
    <style>
        #loading-screen {
            position: fixed;
            z-index: 9999;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-body {
            max-height: calc(100vh - 200px);
            overflow-y: auto;
        }
    </style>

    @include('layouts.config.asset')
    @stack('css')
    @yield('head')
</head>

<body class="animsition site-navbar-small">
    @include('layouts.navbar')
    @include('layouts.sidebar')
    @include('layouts.config.script')

    <script src="{{ asset('Helpers/CustomHelper.js') }}"></script>

    <!-- Page -->
    <div class="page">
        <div class="page-header">
            <h1 class="page-title"> {{ $page }} </h1>
            <ol class="breadcrumb">
                @foreach ($breadcumbs as $i => $item)
                    <li class="breadcrumb-item {{ $item['active'] }}">
                        @if ($item['active'] == 'active')
                            {{ $item['nama'] }}
                        @else
                            <a href="{{ $item['link'] }}">{{ $item['nama'] }}</a>
                        @endif
                    </li>
                @endforeach
            </ol>
            @yield('top_button')
        </div>
        <div class="page-content">
            @yield('content')
        </div>
    </div>
    <!-- End Page -->

    @stack('scripts')

</body>

@include('layouts.loading')

</html>
