<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ url('favicon.png') }}" />

    <title>REBANTA - @yield('title') </title>


    <link rel="stylesheet" href="{{ url('css/vendor.css') }}" />
    <link rel="stylesheet" href="{{ url('css/app.css') }}" /> {{--
    <link href="{{ url('css/animate.min.css') }}" rel="stylesheet"> --}}
    <style>
        #page-wrapper {
            position: inherit;
            margin: 0 0 0 220px;
            min-height: 100vh;
        }


        .mybg {
            background-color: #686b6d;
            padding: 15px 20px;
        }

        .lbc {
            color: white;
        }

        .errorClass {
            border: red 2px solid;
        }

        .tdc {
            color: white;
        }

        .btn {
            border-radius: 0px !important;
        }

        .white {
            color: white;
        }

        .myline {
            border-bottom: 1px solid white;
            margin-top: 12px;
            margin-bottom: 12px;
        }


        /* /////////// */

        /* HOVER */

        @keyframes hover {
            50% {
                transform: translateY(-3px);
            }
            100% {
                transform: translateY(-6px);
            }
        }

        @keyframes shadow {
            0% {
                transform: translateY(6px);
                opacity: .4;
            }
            50% {
                transform: translateY(3px);
                opacity: 1;
            }
            100% {
                transform: translateY(6px);
                opacity: .4;
            }
        }

        .hover {
            position: relative;
            transition-duration: 0.3s;
            transition-property: transform;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            transform: translateZ(0);
        }

        .hover:before {
            pointer-events: none;
            position: absolute;
            z-index: -1;
            content: '';
            top: 100%;
            left: 5%;
            height: 10px;
            width: 90%;
            opacity: 0;
            background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
            /* W3C */
            transition-duration: 0.3s;
            transition-property: transform opacity;
        }

        .hover:hover {
            transform: translateY(-6px);
            animation-name: hover;
            animation-duration: 1.5s;
            animation-delay: 0.3s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        .hover:hover:before {
            opacity: .6;
            transform: translateY(6px);
            animation-name: shadow;
            animation-duration: 1.5s;
            animation-delay: .3s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }
    </style>
</head>

<body>

    <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @if(isset(session('adminmaster')->id))
       @include('layouts.navigation') 
       @endif 
      @if(isset(session('clientmaster')->id))
      @include('layouts.clientnavigation')
        @endif
      @if(isset(session('branchmaster')->id))
      @include('layouts.branchnavigation')
        @endif

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
    @include('layouts.topnavbar')

            <!-- Main view  -->
            @if(session()->has('message'))
            <script type="text/javascript">
                setTimeout(function () {
                    Swal.fire({
                        position: 'bottom',
                        title: '{{ session()->get('message') }}',
                        showConfirmButton: false,
                        timer: 1200,
                        animation: false,
                        customClass: {
                            popup: 'animated fadeInDown'
                        }
                    })
                }, 500);
            </script>
            @endif @yield('content')

            <!-- Footer -->
    @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ url('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ url('js/validate.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    {{-- 
@section('scripts') @show --}}

</body>

</html>