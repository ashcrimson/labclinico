<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield("title_page") - {{config('app.name')}} </title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">


    <link rel="manifest" href="{{asset('manifest.json')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('icons/180.png')}}" />
    <meta name="theme-color" content="#007BFF">

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css" />

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="icon" 
      type="image/png" 
      href="{{asset('dist/img/kisspng-star-of-life-emergency-medical-services-emergency-5b676f0ea71421.2380760815335052946844.png')}}">

    <!--            Estilos inyectados
    ------------------------------------------------------------------------>
    @stack('styles')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



    @include('layouts.partials.navbar')
    @include('layouts.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @can('access_option')
            @yield('content')
        @else
            @include('partials.no_acces_to_option')
        @endcan
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<script src="{{asset("js/sparkline.js")}}"></script>

<script src="{{asset("js/moment.min.js")}}"></script>

<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

@include('partials.flash_alert')


<script>
    @if(config('app.debug'))
        logW("Modo Debug Activo")
    @else
        logConfig.stopLogging = true;
    @endif

    $(function () {

        $(".form-loading-on-submit").submit(function( event ) {

            Swal.fire({
                title: 'Espera por favor...',
                allowEscapeKey: false,
                allowOutsideClick: false,
                timerProgressBar: true,
            });

            Swal.showLoading();
        });
    });

    /**
     * Formatea los datos de los inputs de un formulario
     * solo se utiliza en archivos de servicio DataTable ej: VentaDataTable.php
     * en el método html
     * ->ajax([
     *      'data' => "function(data) { formatDataDatatables($('#form-filter-ventas').serializeArray(), data);   }"
     *  ])
     * @param source
     * @param target
     */
    function formatDataDataTables(source, target) {

        $(source).each(function (i, v) {

            // console.log(i, v);
            if(v['name'].includes('[]')){

                if (!target[v['name']]){
                    target[v['name']] =  [v['value']]
                }else{
                    target[v['name']].push(v['value']) ;
                }
            }else{
                target[v['name']] = v['value'];
            }
        })

    }
</script>

<!--            Scripts inyectados
------------------------------------------------------------------------>
@stack('scripts')

</body>
</html>
