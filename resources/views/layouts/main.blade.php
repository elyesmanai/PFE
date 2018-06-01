<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Marsa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-red-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b>PAIM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PAI</b>Marsa</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"> {{ Auth::user()->name }} </span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-footer">
                <div class="pull-right">
                  <a href="/users/{{ Auth::id() }}" class="btn btn-default btn-flat">Modifier compte</a>
                  <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Déconnexion</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        
             <ul class="sidebar-menu">
                 
                  @if(Auth::user()->role=="technician")
                   <li>   
                    <a href="/projects">  
                      <i class="fa fa-th"></i> <span>Projets</span>
                      <span class="pull-right-container"></span> 
                    </a>   
                 </li> 
                 @endif
                  @if(Auth::user()->role=="financial")
                  <li>   
                    <a href="/home">  
                      <i class="fa fa-th"></i> <span>Acceuil</span>
                      <span class="pull-right-container"></span> 
                    </a>   
                 </li> 
                 @endif
                 @if(Auth::user()->role=="admin"or Auth::user()->role=="delegate" or Auth::user()->role=="civil_society")
                  <li>      
                    <a href="/appointments">  
                      <i class="fa fa-th"></i> <span>Rendez-vous</span>
                       <span class="pull-right-container">
                         <span class="label label-primary pull-right" id="totalTodos">0</span>
                       </span>
                    </a>
                 </li> 
                 <li>      
                    <a href="/feedbacks">  
                      <i class="fa fa-th"></i> <span>Feedbacks</span>
                      <span class="pull-right-container"></span>
                    </a>
                 </li>
                 <li class="treeview">
                    <a href="#">
                      <i class="fa fa-dashboard"></i> <span>Tableaux</span>
                       <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                        <ul class="treeview-menu">
                          <li><a href="/tables/fin"><i class="fa fa-circle-o"></i>Finances</a></li>
                          <li><a href="/tables/tech"><i class="fa fa-circle-o"></i>Techniques</a></li>
                          <li><a href="/tables/fintech"><i class="fa fa-circle-o"></i>Technico-finances</a></li>
                          <li><a href="/tables/res"><i class="fa fa-circle-o"></i>Resources</a></li>
                          <li><a href="/tables/eval"><i class="fa fa-circle-o"></i>Evaluations</a></li>
                        </ul>
                   </li> 
                 @endif
              @if(Auth::user()->role=="admin")
                 
                  <li class="treeview">
                    <a href="/projects">
                      <i class="fa fa-dashboard"></i> <span>Projets</span>
                        <span class="pull-right-container">
                     </span>
                    </a>
                  </li> 
                  <li class="treeview">
                    <a href="/actions">
                      <i class="fa fa-dashboard"></i> <span>Plans communications</span>
                        <span class="pull-right-container">
                     </span>
                    </a>
                  </li> 
                  <li class="treeview">
                    <a href="/meetings">
                      <i class="fa fa-dashboard"></i> <span>Réunions</span>
                        <span class="pull-right-container">
                     </span>
                    </a>
                  </li> 
                  <li class="treeview">
                    <a href="/deadlines">
                      <i class="fa fa-dashboard"></i> <span>Deadlines</span>
                        <span class="pull-right-container">
                     </span>
                    </a>
                  </li> 
                  <li class="treeview">
                    <a href="/users">
                      <i class="fa fa-dashboard"></i> <span>Utilisateurs</span>
                        <span class="pull-right-container">
                     </span>
                    </a>
                  </li> 
                 
              @endif
                  
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
                     @yield('content')
               
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; 2018 Marsa</strong>
  </footer>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
  setInterval(function(){ $.ajax({
    url: "countmeeting",
    success: function( response ) {
      var jsonData = JSON.parse(response);
      for (var i = 0; i < jsonData.length; i++) {
        var counter = jsonData[i];
      //  console.log(counter.counter_name);

      }
      $('#totalTodos').text( counter.som);

    }});
  },2000);
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
