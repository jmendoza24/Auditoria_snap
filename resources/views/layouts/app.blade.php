<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Fluxmetal Fluxmetal">
  <meta name="keywords" content="Fluxmetal">
  <meta name="author" content="Fluxmetal">
  <meta name="google-site-verification" content="SKuO2NOdADnxaV-X-53eTxgnXKRvIABkZB800jV9hWM" />
  <title>Auditoria</title> 
  <link rel="apple-touch-icon" href="{{ url('app-assets/images/ico/apple-icon-120.png') }}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('app-assets/images/ico/favicon.ico') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/vendors.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/tables/datatable/select.dataTables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/tables/extensions/dataTables.colVis.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/forms/icheck/icheck.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/forms/icheck/custom.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/fonts/simple-line-icons/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/pages/chat-application.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/js/gallery/photo-swipe/photoswipe.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/js/gallery/photo-swipe/default-skin/default-skin.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/pages/gallery.css')}}">
   
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/app.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/forms/selects/select2.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/ui/dragula.min.css') }}">
  
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/pickers/daterange/daterangepicker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/pickers/datetime/bootstrap-datetimepicker.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/vendors/css/pickers/pickadate/pickadate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/plugins/pickers/daterange/daterange.css')}}">

  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/core/colors/palette-gradient.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/plugins/forms/checkboxes-radios.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/plugins/forms/extended/form-extended.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/plugins/forms/switch.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('app-assets/css/plugins/forms/wizard.css') }}">
<style type="text/css">
    .naranja{

       background-color: #A34B0A;
      color: white;
    }
    .azul{

       background-color: #113e49;
       color: white;
    }
    .gris{
       
        background-color: #989898;
       color: white;
    }
    .rojo{
       background-color: #A70C31;
       color: white;
    }
    .texto_rojo{
      color: #A70C31;
          
    }
    .texto_azul{
      color: #113e49;
          
    }
    .texto_gris{
      color: #989898;
          
    }
    .texto_naranja{
      color: #A34B0A;
          
    }
     .btn_naranja{
           background-color: #A34B0A;
           color: white;

        }
      .btn_azul{
           background-color: #113e49;
           color: white;

        }
        .btn_rojo{
           background-color: #A70C31;
           color: white;

        }
        .btn_gris{
           background-color: #989898;
           color: white;

        }
    .btn_naranja:hover { color: white; }
    .btn_rojo:hover { color: white; }
    .btn_gris:hover { color: white; }
    .btn_azul:hover { color: white; }

    .gris:hover { color: white; }
    .azul:hover { color: white; }
    .rojo:hover { color: white; }
    .btn_gris:hover { color: white; }



        .texto_rojo:hover { color: white; }




    .nav-link active{
         color: #852fbe;
          border-color: #852fbe;

      }

    
.main-menu.menu-light .navigation > li ul .active > a {
    color: #A34B0A;
    font-weight: 500;
}


   </style>

   
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ url('assets/css/style.css') }}">

  <!-- END Custom CSS-->
</head>


<body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover"
data-menu="horizontal-menu" data-col="2-columns">
@if (!Auth::guest())
    
        <!-- Main Header -->
        
        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="app-content content">
            <div class="content-wrapper">
              <div class="content-body">
                <!-- Basic initialization table -->
                <section id="initialization">
                  <div class="row">
                    <div class="col-12">
                      
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title">@yield('titulo')</h4>
                          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                          <div class="heading-elements">
                            <ul class="list-inline mb-0">
                              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-content collapse show">
                          <div class="card-body card-dashboard">
                            @yield('content')
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
          <footer class="footer footer-static footer-light navbar-border">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
              <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2020 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
                target="_blank">Snappath </a>, All rights reserved. </span>
              <!--<span class="float-md-right d-block d-md-inline-block d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>-->
            </p>
          </footer>
@else
 <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

               
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                
                <a class="navbar-brand" href="{!! url('/') !!}">
                    Snappath company
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                
                <ul class="nav navbar-nav">
                    <li><a href="{!! url('/home') !!}">Home</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                
                    <li><a href="{!! url('/login') !!}">Login</a></li>
                    <li><a href="{!! url('/register') !!}">Registro</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
@endif

 <script src="{{ url('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->

  <script src="{{ url('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/tables/buttons.colVis.min.js') }}" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="{{ url('app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/extended/typeahead/handlebars.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

  
  <script src="{{ url('app-assets/js/scripts/forms/extended/form-inputmask.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/forms/extended/form-maxlength.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/forms/select/form-select2.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/modal/components-modal.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/forms/toggle/switchery.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/forms/switch.js') }}" type="text/javascript"></script> 
  
  <script src="{{ url('app-assets/js/scripts/customizer.js') }}" type="text/javascript"></script>

  <script src="{{ url('app-assets/vendors/js/extensions/jquery.steps.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/dateTime/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/pickadate/picker.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/pickadate/picker.date.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/pickadate/picker.time.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/pickadate/legacy.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/pickers/daterange/daterangepicker.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/pickers/dateTime/bootstrap-datetime.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js')}}" type="text/javascript"></script> 


  <script src="{{ url('app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}" type="text/javascript"></script>
  
  <script src="{{ url('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/core/app.js') }}" type="text/javascript"></script>
  
  <script src="{{ url('app-assets/js/scripts/forms/wizard-steps.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/extensions/dragula.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/cards/draggable.js') }}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/tables/datatable/dataTables.colVis.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/tables/datatables-extensions/datatable-colvis.js')}}" type="text/javascript"></script>

  <script src="{{ url('app-assets/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script src="{{ url('app-assets/vendors/js/gallery/masonry/masonry.pkgd.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/gallery/photo-swipe/photoswipe.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/vendors/js/gallery/photo-swipe/photoswipe-ui-default.min.js')}}" type="text/javascript"></script>
  <script src="{{ url('app-assets/js/scripts/gallery/photo-swipe/photoswipe-script.js')}}" type="text/javascript"></script>
  <script type="text/javascript" src="{{ url('app-assets/js/scripts/scripts.js')}}"></script>
  <script type="text/javascript" src="{{ url('app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
  <script src="{{ url('assets/js/scripts.js') }}" type="text/javascript"></script>
  @yield('script')


  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
   
  <!-- END PAGE LEVEL JS-->
</body>
</html>
<div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" id="modal_primary">
    <div class="modal-content">
      <div class="modal-header bg-primary white">
        <h4 class="modal-title" id="myModalLabel8">Auditoria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="contenido">
      </div>
      <!--
      <div class="modal-footer" id="footer_primary">
        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Cerrar</button>
      </div>--->
    </div>
  </div>
</div>