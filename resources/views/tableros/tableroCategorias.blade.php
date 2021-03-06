<!DOCTYPE html>
<html>
<head>
<title>@yield('name_page')</title>
<meta charset="UTF-8">
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/ionicons.min.css">
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/AdminLTE.min.css">
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/skin.css">
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/iCheck/flat/blue.css">
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/morris.css">
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/datepicker3.css">
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/daterangepicker-bs3.css">
<link rel="stylesheet" type="text/css" href="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/css/bootstrap3-wysihtml5.min.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<style type="text/css">
#freecssfooter{display:block;width:100%;padding:120px 0 20px;overflow:hidden;background-color:transparent;z-index:5000;text-align:center;}
#freecssfooter div#fcssholder div{display:none;}
#freecssfooter div#fcssholder div:first-child{display:block;}
#freecssfooter div#fcssholder div:first-child a{float:none;margin:0 auto;}
</style>
</head>

<body class="skin-blue">
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<div class="wrapper">
  <header class="main-header"><a href="pages/dashboard-2.php" class="logo"><b>PWF</b>2021</a>
    <nav class="navbar navbar-static-top" role="navigation"><a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"><span class="sr-only">Toggle navigation</span></a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i><span class="label label-success">4</span></a>
            <ul class="dropdown-menu">
            </ul>
          </li>
          <li class="dropdown notifications-menu"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i><span class="label label-warning">10</span></a>
            <ul class="dropdown-menu">
            </ul>
          </li>
          <li class="dropdown tasks-menu"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-flag-o"></i><span class="label label-danger">9</span></a>
            <ul class="dropdown-menu">
            </ul>
          </li>
          <li class="dropdown user user-menu"><a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user2-160x160.jpg" class="user-image" alt="website template image"><span class="hidden-xs">Jos?? Fernando P??rez Garc??a</span></a>
            <ul class="dropdown-menu">
              <li class="user-header"><img src="assets/img/user2-160x160.jpg" class="img-circle" alt="website template image">
                <p>Jos?? Fernando P??rez Garc??a</p>
              </li>
              <li class="user-body">
                <div class="col-xs-4 text-center"><a href="#">Followers</a></div>
                <div class="col-xs-4 text-center"><a href="#">Sales</a></div>
                <div class="col-xs-4 text-center"><a href="#">Friends</a></div>
              </li>
              <li class="user-footer">
                <div class="pull-left"><a href="#" class="btn btn-default btn-flat">Profile</a></div>
                <div class="pull-right"><a href="#" class="btn btn-default btn-flat">Sign out</a></div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image"><img src="" class="img-circle" alt="website template image"></div>
        <div class="pull-left info">
          <p>Jos?? Fernando P??rez Garc??a</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a></div>
      </div>
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
          <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
          </span> </div>
      </form>
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
          @yield('menu_nav')
      </ul>
    </section>
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1> Dashboard <small>Control panel</small> </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
    <section class="content">
      <div class="box">
        <div class="box-body">
          <div class="row">
            {{-- Directiva de contenido categorias --}}
            @yield('content')
          </div>
        </div>
      </div>
    </section>

  <footer class="main-footer" style="margin-top: 500px;">
    <div class="pull-right hidden-xs"><b>Version</b> 1.0</div>
    <strong>Copyright &copy; 2021 | By JFPG</a>. </strong>Derechos Reservados</footer>
</div>
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/jQuery-2.1.3.min.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/jquery-ui.min.js"></script> 
<script>$.widget.bridge('uibutton', $.ui.button);</script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/bootstrap.min.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/raphael-min.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/morris.min.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/jquery.sparkline.min.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/jquery-jvectormap-1.2.2.min.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/jquery-jvectormap-world-mill-en.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/jquery.knob.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/daterangepicker.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/bootstrap-datepicker.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/bootstrap3-wysihtml5.all.min.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/icheck.min.js"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/jquery.slimscroll.min.js"></script> 
<script src='https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/fastclick.min.js'></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/app.min.jss"></script> 
<script src="https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page210/adminlte/assets/js/pages/dashboard.js"></script>

</body>
</html>