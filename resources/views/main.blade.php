<!doctype html>
<html class="fixed" id="html_id">
    <head>
        <meta charset="utf-8">
        <title>@yield('title','Inicio')</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{URL::asset('https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.css')}}" />
        <style>
            body {
                font-family: 'Roboto Light', arial;
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(white), to(black));
                background: -webkit-linear-gradient(top, #003E65, white);
                background: -moz-linear-gradient(top, #003E65, white);
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            .btn-primary{
             background-color: #003e65;
                border-color:#003e65;
                color: white;
            }
            label{
                color: #95999c;
            }

        </style>
    @yield('AddScritpHeader')
    </head>
    <body>
    <br>
    <div class="container" style="background-color: white">
        <br>
        <div class="card">
            <div class="card-header" id="headingOne">
                <div class="row">
                    <div class="col-md-2 text-right">
                        <img src="{{URL::asset('imagen/iconoSinproc200.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 text-center">

                    </div>
                    <div class="col-md-3">
                
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
        <br>

        <div>
            <div class="row">
                <div class="col-12">
                    <section class="content-body">
                        <br>
                            @yield('content')
                        <br>
                    </section>
                </div>
            </div>
        </div>
    </div>

    </body>
<!-- auto complete oof-->
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.18/af-2.3.3/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/cr-1.5.0/fc-3.2.5/fh-3.1.4/kt-2.5.0/r-2.2.2/rg-1.1.0/rr-1.2.4/sc-2.0.0/sl-1.3.0/datatables.min.js')}}"></script>
    <script src="{{URL::asset('js/local.js')}}"></script>

@yield('AddScriptFooter')



</html>
