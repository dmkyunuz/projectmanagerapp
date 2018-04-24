<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo Web::getTitle() ?></title>
	<?= $this->web->getMeta(); ?>
	<link rel="icon" href="<?= site_url('public/favicon.ico')?>">
	<?php
		 $this->web->Register()->css();
		 $this->web->Register()->js();
	?>
  
</head>

<body class="fixed-nav sticky-footer bg-default" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-sm navbar-default bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Your App</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" >
     
      <ul class="navbar-nav navbar-sidenav  animated slideInLeft"  style="overflow: auto" id="exampleAccordion" >
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard" style="margin-top: 10px !important;">
          <a class="nav-link "   href="<?= site_url('/dashboard') ?>">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#master" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-database"></i>
            <span class="nav-link-text">Master</span>
          </a>
          <ul class="sidenav-second-level collapse" id="master">
            <li>
              <a class="nav-link " href="<?= site_url('/users') ?>">User</a>
            </li>
           
            
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
          <a class="nav-link " href="charts.html">
            <i class="fa fa-fw fa-tags"></i>
            <span class="nav-link-text">Category</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="note">
          <a class="nav-link " href="<?= site_url('/mytasks') ?>">
            <i class="fa fa-fw fa-sticky-note "></i>
            <span class="nav-link-text">My Task</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="note">
          <a class="nav-link " href="charts.html">
            <i class="fa fa-fw fa-tasks"></i>
            <span class="nav-link-text">Project</span>
          </a>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-image"></i>
            <span class="nav-link-text">Media</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Media Category</a>
            </li>
            <li>
              <a href="register.html">My Media</a>
            </li>
            
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#preferences" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-cogs"></i>
            <span class="nav-link-text">Preferences</span>
          </a>
          <ul class="sidenav-second-level collapse" id="preferences">
            <li>
              <a href="login.html">Notification</a>
            </li>
           
            
          </ul>
        </li>
        
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper" style="" id="main-content">
     
      <?php echo $content_for_layout; ?> 	
    
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="form-modal">
      <div class="modal-dialog  modal-md">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Modal Heading</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

          <div class="modal-body">
            Loading ..
          </div>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    
    
    <?php	 $this->web->Register()->jqueryPlugins(); ?>
  </div>
  
  <script type="text/javascript">
    $("body").off("click",".ajax-link").on("click",".ajax-link",function(e){
      var url = $(this).attr('href');
      var title = $(this).text();

      loadPage(url);
      CreateHistory(url,title);
      return false;

    });

    function CreateHistory(url, title){
        history.pushState({
        url: url,
        title: title
        }, title, url);

        document.title = title;
    }
    function loadPage(url){
      var screenHeight = $(window).height() +90;
      $("#main-content").css({"min-height": screenHeight+"px"});
      // $("#main-content").load(url);
      $.ajax({
        type : 'GET',
        url : url,
        dataType : 'JSON',
        success : function(response){
          var htmlOutput = response.html;
          $("#main-content").html(htmlOutput);

        }
      })
      $('html, body').animate({
      scrollTop: $("body").offset().top
      }, 100);
    }

    $(window).on('popstate', function (e) {
        var state = e.originalEvent.state;
        if (state !== null) {
        document.title = state.title;
        loadPage(state.url);

    } else {
      var url = '<?= base_url()?>dashboard';
      $("#main-content").load(url,function(){
      title = 'Dashboard';
      history.pushState({
      url: url,
      title: title
      }, title, url);

      document.title = title;

    });
  }
  });
    $( function() {
    $( "#datepicker" ).datepicker();
});
var resizeTimer;
$(window).on('resize', function(e){
      var max1 = 767;
      var max2 = 991;
      var max3 = 1199;
      var screenWindow = $(this);
      clearTimeout(resizeTimer);
      
      resizeTimer = setTimeout(function() {
          var documentWidth = screenWindow.width();
          alert(documentWidth);
          if(documentWidth < max1) {

          }else if(documentWidth < max2){

          }else if(documentWidth < max3){

          }else{
            
          }
                
      }, 250);
      
});
  </script>
</body>

</html>
