<?php
use app\assets\UsersAsset;
use yii\helpers\Html;
UsersAsset::register ( $this ); // $this 代表视图对象
?>
<?php $this->beginPage()?>
<!DOCTYPE html>
<html>
<head>
<title>Minimal 1.0 - DataTables</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8" />

<!-- Bootstrap -->
<!-- <link href="users/css/vendor/bootstrap/bootstrap.min.css" -->
<!-- 	rel="stylesheet"> -->
<link
	href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
	rel="stylesheet">
	
<!-- <link rel="stylesheet" href="users/css/vendor/animate/animate.css"> -->
<!-- <link type="text/css" rel="stylesheet" media="all" -->
<!-- 	href="users/js/vendor/mmenu/css/jquery.mmenu.all.css" /> -->
<!-- <link rel="stylesheet" -->
<!-- 	href="users/js/vendor/videobackground/css/jquery.videobackground.css"> -->
<!-- <link rel="stylesheet" href="users/css/vendor/bootstrap-checkbox.css"> -->

<!-- <link rel="stylesheet" href="users/js/vendor/chosen/css/chosen.min.css"> -->
<!-- <link rel="stylesheet" -->
<!-- 	href="users/js/vendor/chosen/css/chosen-bootstrap.css"> -->
<!-- <link rel="stylesheet" -->
<!-- 	href="users/js/vendor/datatables/css/dataTables.bootstrap.css"> -->
<!-- <link rel="stylesheet" href="users/js/vendor/datatables/css/ColVis.css"> -->
<!-- <link rel="stylesheet" -->
<!-- 	href="users/js/vendor/datatables/css/TableTools.css"> -->

<!-- <link href="users/css/minimal.css" rel="stylesheet"> -->

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <?= Html::csrfMetaTags()?>
    <?php $this->head()?>
</head>
<body class="bg-1">
<?php $this->beginBody()?>




	<!-- Preloader -->
	<div class="mask">
		<div id="loader"></div>
	</div>
	<!--/Preloader -->

	<!-- Wrap all page content here -->
	<div id="wrap">




		<!-- Make page fluid -->
		<div class="row">





			<!-- Fixed navbar -->
			<div
				class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top"
				role="navigation" id="navbar">



				<!-- Branding -->
				<div class="navbar-header col-md-2">
					<a class="navbar-brand" href="index.html"> <strong>MIN</strong>IMAL
					</a>
					<div class="sidebar-collapse">
						<a href="#"> <i class="fa fa-bars"></i>
						</a>
					</div>
				</div>
				<!-- Branding end -->


				<!-- .nav-collapse -->
				<div class="navbar-collapse">

					<!-- Page refresh -->
					<ul class="nav navbar-nav refresh">
						<li class="divided"><a href="#" class="page-refresh"><i
								class="fa fa-refresh"></i></a></li>
					</ul>
					<!-- /Page refresh -->

					<!-- Search -->
					<div class="search" id="main-search">
						<i class="fa fa-search"></i> <input type="text"
							placeholder="Search...">
					</div>
					<!-- Search end -->

					<!-- Quick Actions -->
					<ul class="nav navbar-nav quick-actions">

						<li class="dropdown divided"><a class="dropdown-toggle button"
							data-toggle="dropdown" href="#"> <i class="fa fa-tasks"></i> <span
								class="label label-transparent-black">2</span>
						</a>

							<ul class="dropdown-menu wide arrow nopadding bordered">
								<li><h1>
										You have <strong>2</strong> new tasks
									</h1></li>
								<li><a href="#">
										<div class="task-info">
											<div class="desc">Layout</div>
											<div class="percent">80%</div>
										</div>
										<div class="progress progress-striped progress-thin">
											<div class="progress-bar progress-bar-green"
												role="progressbar" aria-valuenow="40" aria-valuemin="0"
												aria-valuemax="100" style="width: 80%">
												<span class="sr-only">40% Complete (success)</span>
											</div>
										</div>
								</a></li>
								<li><a href="#">
										<div class="task-info">
											<div class="desc">Schemes</div>
											<div class="percent">15%</div>
										</div>
										<div class="progress progress-striped active progress-thin">
											<div class="progress-bar progress-bar-cyan"
												role="progressbar" aria-valuenow="45" aria-valuemin="0"
												aria-valuemax="100" style="width: 15%">
												<span class="sr-only">45% Complete</span>
											</div>
										</div>
								</a></li>
								<li><a href="#">
										<div class="task-info">
											<div class="desc">Forms</div>
											<div class="percent">5%</div>
										</div>
										<div class="progress progress-striped progress-thin">
											<div class="progress-bar progress-bar-orange"
												role="progressbar" aria-valuenow="45" aria-valuemin="0"
												aria-valuemax="100" style="width: 5%">
												<span class="sr-only">5% Complete (warning)</span>
											</div>
										</div>
								</a></li>
								<li><a href="#">
										<div class="task-info">
											<div class="desc">JavaScript</div>
											<div class="percent">30%</div>
										</div>
										<div class="progress progress-striped progress-thin">
											<div class="progress-bar progress-bar-red" role="progressbar"
												aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"
												style="width: 30%">
												<span class="sr-only">30% Complete (danger)</span>
											</div>
										</div>
								</a></li>
								<li><a href="#">
										<div class="task-info">
											<div class="desc">Dropdowns</div>
											<div class="percent">60%</div>
										</div>
										<div class="progress progress-striped progress-thin">
											<div class="progress-bar progress-bar-amethyst"
												role="progressbar" aria-valuenow="45" aria-valuemin="0"
												aria-valuemax="100" style="width: 60%">
												<span class="sr-only">60% Complete</span>
											</div>
										</div>
								</a></li>
								<li><a href="#">Check all tasks <i class="fa fa-angle-right"></i></a></li>
							</ul></li>

						<li class="dropdown divided"><a class="dropdown-toggle button"
							data-toggle="dropdown" href="#"> <i class="fa fa-envelope"></i> <span
								class="label label-transparent-black">1</span>
						</a>

							<ul class="dropdown-menu wider arrow nopadding messages">
								<li><h1>
										You have <strong>1</strong> new message
									</h1></li>
								<li><a class="cyan" href="#">
										<div class="profile-photo">
											<img src="users/images/ici-avatar.jpg" alt />
										</div>
										<div class="message-info">
											<span class="sender">Ing. Imrich Kamarel</span> <span
												class="time">12 mins</span>
											<div class="message-content">Duis aute irure dolor in
												reprehenderit in voluptate velit esse cillum</div>
										</div>
								</a></li>

								<li><a class="green" href="#">
										<div class="profile-photo">
											<img src="users/images/arnold-avatar.jpg" alt />
										</div>
										<div class="message-info">
											<span class="sender">Arnold Karlsberg</span> <span
												class="time">1 hour</span>
											<div class="message-content">Lorem ipsum dolor sit amet,
												consectetur adipisicing elit</div>
										</div>
								</a></li>

								<li><a href="#">
										<div class="profile-photo">
											<img src="users/images/profile-photo.jpg" alt />
										</div>
										<div class="message-info">
											<span class="sender">John Douey</span> <span class="time">3
												hours</span>
											<div class="message-content">Excepteur sint occaecat
												cupidatat non proident, sunt in culpa qui officia</div>
										</div>
								</a></li>

								<li><a class="red" href="#">
										<div class="profile-photo">
											<img src="users/images/peter-avatar.jpg" alt />
										</div>
										<div class="message-info">
											<span class="sender">Peter Kay</span> <span class="time">5
												hours</span>
											<div class="message-content">Ut enim ad minim veniam, quis
												nostrud exercitation</div>
										</div>
								</a></li>

								<li><a class="orange" href="#">
										<div class="profile-photo">
											<img src="users/images/george-avatar.jpg" alt />
										</div>
										<div class="message-info">
											<span class="sender">George McCain</span> <span class="time">6
												hours</span>
											<div class="message-content">Lorem ipsum dolor sit amet,
												consectetur adipisicing elit</div>
										</div>
								</a></li>


								<li class="topborder"><a href="#">Check all messages <i
										class="fa fa-angle-right"></i></a></li>
							</ul></li>

						<li class="dropdown divided"><a class="dropdown-toggle button"
							data-toggle="dropdown" href="#"> <i class="fa fa-bell"></i> <span
								class="label label-transparent-black">3</span>
						</a>

							<ul class="dropdown-menu wide arrow nopadding bordered">
								<li><h1>
										You have <strong>3</strong> new notifications
									</h1></li>

								<li><a href="#"> <span class="label label-green"><i
											class="fa fa-user"></i></span> New user registered. <span
										class="small">18 mins</span>
								</a></li>

								<li><a href="#"> <span class="label label-red"><i
											class="fa fa-power-off"></i></span> Server down. <span
										class="small">27 mins</span>
								</a></li>

								<li><a href="#"> <span class="label label-orange"><i
											class="fa fa-plus"></i></span> New order. <span class="small">36
											mins</span>
								</a></li>

								<li><a href="#"> <span class="label label-cyan"><i
											class="fa fa-power-off"></i></span> Server restared. <span
										class="small">45 mins</span>
								</a></li>

								<li><a href="#"> <span class="label label-amethyst"><i
											class="fa fa-power-off"></i></span> Server started. <span
										class="small">50 mins</span>
								</a></li>

								<li><a href="#">Check all notifications <i
										class="fa fa-angle-right"></i></a></li>
							</ul></li>

						<li class="dropdown divided user" id="current-user">
							<div class="profile-photo">
								<img src="users/images/profile-photo.jpg" alt />
							</div> <a class="dropdown-toggle options" data-toggle="dropdown"
							href="#"> John Douey <i class="fa fa-caret-down"></i>
						</a>

							<ul class="dropdown-menu arrow settings">

								<li>

									<h3>Backgrounds:</h3>
									<ul id="color-schemes">
										<li><a href="#" class="bg-1"></a></li>
										<li><a href="#" class="bg-2"></a></li>
										<li><a href="#" class="bg-3"></a></li>
										<li><a href="#" class="bg-4"></a></li>
										<li><a href="#" class="bg-5"></a></li>
										<li><a href="#" class="bg-6"></a></li>
									</ul>

									<div class="form-group videobg-check">
										<label class="col-xs-8 control-label">Video BG</label>
										<div class="col-xs-4 control-label">
											<div class="onoffswitch greensea small">
												<input type="checkbox" name="onoffswitch"
													class="onoffswitch-checkbox" id="videobg-check"> <label
													class="onoffswitch-label" for="videobg-check"> <span
													class="onoffswitch-inner"></span> <span
													class="onoffswitch-switch"></span>
												</label>
											</div>
										</div>
									</div>

								</li>

								<li class="divider"></li>

								<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>

								<li><a href="#"><i class="fa fa-calendar"></i> Calendar</a></li>

								<li><a href="#"><i class="fa fa-envelope"></i> Inbox <span
										class="badge badge-red" id="user-inbox">3</span></a></li>

								<li class="divider"></li>

								<li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
							</ul>
						</li>

						<li><a href="#mmenu"><i class="fa fa-comments"></i></a></li>
					</ul>
					<!-- /Quick Actions -->



					<!-- Sidebar -->
					<ul class="nav navbar-nav side-nav" id="sidebar">

						<li class="collapsed-content">
							<ul>
								<li class="search">
									<!-- Collapsed search pasting here at 768px -->
								</li>
							</ul>
						</li>

						<li class="navigation" id="navigation"><a href="#"
							class="sidebar-toggle" data-toggle="#navigation">Navigation <i
								class="fa fa-angle-up"></i></a>

							<ul class="menu">

								<li><a href="index.html"> <i class="fa fa-tachometer"></i>
										Dashboard <span class="badge badge-red">1</span>
								</a></li>

								<li class="dropdown"><a href="#" class="dropdown-toggle"
									data-toggle="dropdown"> <i class="fa fa-list"></i> Forms <b
										class="fa fa-plus dropdown-plus"></b>
								</a>
									<ul class="dropdown-menu">
										<li><a href="form-elements.html"> <i class="fa fa-caret-right"></i>
												Common Elements
										</a></li>
										<li><a href="validation-elements.html"> <i
												class="fa fa-caret-right"></i> Validation
										</a></li>
										<li><a href="form-wizard.html"> <i class="fa fa-caret-right"></i>
												Form Wizard
										</a></li>
									</ul></li>

								<li class="dropdown"><a href="#" class="dropdown-toggle"
									data-toggle="dropdown"> <i class="fa fa-pencil"></i> Interface
										<b class="fa fa-plus dropdown-plus"></b>
								</a>
									<ul class="dropdown-menu">
										<li><a href="ui-elements.html"> <i class="fa fa-caret-right"></i>
												UI Elements
										</a></li>
										<li><a href="typography.html"> <i class="fa fa-caret-right"></i>
												Typography
										</a></li>
										<li><a href="tiles.html"> <i class="fa fa-caret-right"></i>
												Tiles
										</a></li>
									</ul></li>

								<li><a href="buttons.html"> <i class="fa fa-tint"></i> Buttons &
										Icons
								</a></li>
								<li><a href="grid.html"> <i class="fa fa-th"></i> Grid Layout
								</a></li>

								<li class="dropdown open active"><a href="#"
									class="dropdown-toggle" data-toggle="dropdown"> <i
										class="fa fa-th-large"></i> Tables <b
										class="fa fa-plus dropdown-plus"></b>
								</a>
									<ul class="dropdown-menu">
										<li><a href="tables.html"> <i class="fa fa-caret-right"></i>
												Bootstrap Tables
										</a></li>
										<li class="active"><a href="datatables.html"> <i
												class="fa fa-caret-right"></i> DataTables
										</a></li>
									</ul></li>

								<li class="dropdown"><a href="#" class="dropdown-toggle"
									data-toggle="dropdown"> <i class="fa fa-desktop"></i> Example
										Pages <b class="fa fa-plus dropdown-plus"></b> <span
										class="label label-greensea">mails</span>
								</a>
									<ul class="dropdown-menu">
										<li><a href="login.html"> <i class="fa fa-caret-right"></i>
												Login Page
										</a></li>
										<li><a href="calendar.html"> <i class="fa fa-caret-right"></i>
												Calendar
										</a></li>
										<li><a href="page404.html"> <i class="fa fa-caret-right"></i>
												Page 404
										</a></li>
										<li><a href="page500.html"> <i class="fa fa-caret-right"></i>
												Page 500
										</a></li>
										<li><a href="page-offline.html"> <i class="fa fa-caret-right"></i>
												Page Offline
										</a></li>
										<li><a href="gallery.html"> <i class="fa fa-caret-right"></i>
												Gallery
										</a></li>
										<li><a href="timeline.html"> <i class="fa fa-caret-right"></i>
												Timeline
										</a></li>
										<li><a href="mail.html"> <i class="fa fa-caret-right"></i>
												Vertical Mail <span class="badge badge-red">5</span>
										</a></li>
										<li><a href="mail-horizontal.html"> <i
												class="fa fa-caret-right"></i> Horizontal Mail <span
												class="label label-greensea">mails</span>
										</a></li>
										<li><a href="vector-maps.html"> <i class="fa fa-caret-right"></i>
												Vector Maps
										</a></li>
										<li><a href="google-maps.html"> <i class="fa fa-caret-right"></i>
												Google Maps
										</a></li>
									</ul></li>

								<li><a href="widgets.html"> <i class="fa fa-play-circle"></i>
										Widgets
								</a></li>

								<li><a href="charts.html"> <i class="fa fa-bar-chart-o"></i>
										Charts & Graphs
								</a></li>


							</ul></li>

						<li class="summary" id="order-summary"><a href="#"
							class="sidebar-toggle underline" data-toggle="#order-summary">Orders
								Summary <i class="fa fa-angle-up"></i>
						</a>

							<div class="media">
								<a class="pull-right" href="#"> <span id="sales-chart"></span>
								</a>
								<div class="media-body">
									This week sales
									<h3 class="media-heading">26, 149</h3>
								</div>
							</div>

							<div class="media">
								<a class="pull-right" href="#"> <span id="balance-chart"></span>
								</a>
								<div class="media-body">
									This week balance
									<h3 class="media-heading">318, 651</h3>
								</div>
							</div></li>

						<li class="settings" id="general-settings"><a href="#"
							class="sidebar-toggle underline" data-toggle="#general-settings">General
								Settings <i class="fa fa-angle-up"></i>
						</a>

							<div class="form-group">
								<label class="col-xs-8 control-label">Switch ON</label>
								<div class="col-xs-4 control-label">
									<div class="onoffswitch greensea">
										<input type="checkbox" name="onoffswitch"
											class="onoffswitch-checkbox" id="switch-on" checked=""> <label
											class="onoffswitch-label" for="switch-on"> <span
											class="onoffswitch-inner"></span> <span
											class="onoffswitch-switch"></span>
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-xs-8 control-label">Switch OFF</label>
								<div class="col-xs-4 control-label">
									<div class="onoffswitch greensea">
										<input type="checkbox" name="onoffswitch"
											class="onoffswitch-checkbox" id="switch-off"> <label
											class="onoffswitch-label" for="switch-off"> <span
											class="onoffswitch-inner"></span> <span
											class="onoffswitch-switch"></span>
										</label>
									</div>
								</div>
							</div></li>


					</ul>
					<!-- Sidebar end -->





				</div>
				<!--/.nav-collapse -->





			</div>
			<!-- Fixed navbar end -->
        <?= $content?>
        
		<div id="mmenu" class="right-panel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs nav-justified">
				<li class="active"><a href="#mmenu-users" data-toggle="tab"><i
						class="fa fa-users"></i></a></li>
				<li class=""><a href="#mmenu-history" data-toggle="tab"><i
						class="fa fa-clock-o"></i></a></li>
				<li class=""><a href="#mmenu-friends" data-toggle="tab"><i
						class="fa fa-heart"></i></a></li>
				<li class=""><a href="#mmenu-settings" data-toggle="tab"><i
						class="fa fa-gear"></i></a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane active" id="mmenu-users">
					<h5>
						<strong>Online</strong> Users
					</h5>

					<ul class="users-list">

						<li class="online">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/ici-avatar.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Ing. Imrich <strong>Kamarel</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
									<span class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

						<li class="online">
							<div class="media">

								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/arnold-avatar.jpg" alt>
								</a> <span class="badge badge-red unread">3</span>

								<div class="media-body">
									<h6 class="media-heading">
										Arnold <strong>Karlsberg</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
									<span class="badge badge-outline status"></span>
								</div>

							</div>
						</li>

						<li class="online">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/peter-avatar.jpg" alt>

								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Peter <strong>Kay</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Kosice, Slovakia</small>
									<span class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

						<li class="online">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/george-avatar.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										George <strong>McCain</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Prague, Czech Republic</small>
									<span class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

						<li class="busy">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/random-avatar1.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Lucius <strong>Cashmere</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Wien, Austria</small> <span
										class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

						<li class="busy">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/random-avatar2.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Jesse <strong>Phoenix</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Berlin, Germany</small>
									<span class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

					</ul>

					<h5>
						<strong>Offline</strong> Users
					</h5>

					<ul class="users-list">

						<li class="offline">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/random-avatar4.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Dell <strong>MacApple</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Paris, France</small> <span
										class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

						<li class="offline">
							<div class="media">

								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/random-avatar5.jpg" alt>
								</a>

								<div class="media-body">
									<h6 class="media-heading">
										Roger <strong>Flopple</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Rome, Italia</small> <span
										class="badge badge-outline status"></span>
								</div>

							</div>
						</li>

						<li class="offline">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/random-avatar6.jpg" alt>

								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Nico <strong>Vulture</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Kyjev, Ukraine</small>
									<span class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

						<li class="offline">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/random-avatar7.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Bobby <strong>Socks</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Moscow, Russia</small>
									<span class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

						<li class="offline">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/random-avatar8.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Anna <strong>Opichia</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
									<span class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

					</ul>

				</div>

				<div class="tab-pane" id="mmenu-history">
					<h5>
						<strong>Chat</strong> History
					</h5>

					<ul class="history-list">

						<li class="online">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/ici-avatar.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Ing. Imrich <strong>Kamarel</strong>
									</h6>
									<small>Lorem ipsum dolor sit amet, consectetur adipisicing
										elit, sed do eiusmod tempor</small> <span
										class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

						<li class="busy">
							<div class="media">

								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/arnold-avatar.jpg" alt>
								</a> <span class="badge badge-red unread">3</span>

								<div class="media-body">
									<h6 class="media-heading">
										Arnold <strong>Karlsberg</strong>
									</h6>
									<small>Duis aute irure dolor in reprehenderit in voluptate
										velit esse cillum dolore eu fugiat nulla pariatur</small> <span
										class="badge badge-outline status"></span>
								</div>

							</div>
						</li>

						<li class="offline">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/peter-avatar.jpg" alt>

								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Peter <strong>Kay</strong>
									</h6>
									<small>Excepteur sint occaecat cupidatat non proident, sunt in
										culpa qui officia deserunt mollit </small> <span
										class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

					</ul>

				</div>

				<div class="tab-pane" id="mmenu-friends">
					<h5>
						<strong>Friends</strong> List
					</h5>
					<ul class="favourite-list">

						<li class="online">
							<div class="media">

								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/arnold-avatar.jpg" alt>
								</a> <span class="badge badge-red unread">3</span>

								<div class="media-body">
									<h6 class="media-heading">
										Arnold <strong>Karlsberg</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
									<span class="badge badge-outline status"></span>
								</div>

							</div>
						</li>

						<li class="offline">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/random-avatar8.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Anna <strong>Opichia</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
									<span class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

						<li class="busy">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/random-avatar1.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Lucius <strong>Cashmere</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Wien, Austria</small> <span
										class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

						<li class="online">
							<div class="media">
								<a class="pull-left profile-photo" href="#"> <img
									class="media-object" src="users/images/ici-avatar.jpg" alt>
								</a>
								<div class="media-body">
									<h6 class="media-heading">
										Ing. Imrich <strong>Kamarel</strong>
									</h6>
									<small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
									<span class="badge badge-outline status"></span>
								</div>
							</div>
						</li>

					</ul>
				</div>

				<div class="tab-pane pane-settings" id="mmenu-settings">
					<h5>
						<strong>Chat</strong> Settings
					</h5>

					<ul class="settings">

						<li>
							<div class="form-group">
								<label class="col-xs-8 control-label">Show Offline Users</label>
								<div class="col-xs-4 control-label">
									<div class="onoffswitch greensea">
										<input type="checkbox" name="onoffswitch"
											class="onoffswitch-checkbox" id="show-offline" checked=""> <label
											class="onoffswitch-label" for="show-offline"> <span
											class="onoffswitch-inner"></span> <span
											class="onoffswitch-switch"></span>
										</label>
									</div>
								</div>
							</div>
						</li>

						<li>
							<div class="form-group">
								<label class="col-xs-8 control-label">Show Fullname</label>
								<div class="col-xs-4 control-label">
									<div class="onoffswitch greensea">
										<input type="checkbox" name="onoffswitch"
											class="onoffswitch-checkbox" id="show-fullname"> <label
											class="onoffswitch-label" for="show-fullname"> <span
											class="onoffswitch-inner"></span> <span
											class="onoffswitch-switch"></span>
										</label>
									</div>
								</div>
							</div>
						</li>

						<li>
							<div class="form-group">
								<label class="col-xs-8 control-label">History Enable</label>
								<div class="col-xs-4 control-label">
									<div class="onoffswitch greensea">
										<input type="checkbox" name="onoffswitch"
											class="onoffswitch-checkbox" id="show-history" checked=""> <label
											class="onoffswitch-label" for="show-history"> <span
											class="onoffswitch-inner"></span> <span
											class="onoffswitch-switch"></span>
										</label>
									</div>
								</div>
							</div>
						</li>

						<li>
							<div class="form-group">
								<label class="col-xs-8 control-label">Show Locations</label>
								<div class="col-xs-4 control-label">
									<div class="onoffswitch greensea">
										<input type="checkbox" name="onoffswitch"
											class="onoffswitch-checkbox" id="show-location" checked=""> <label
											class="onoffswitch-label" for="show-location"> <span
											class="onoffswitch-inner"></span> <span
											class="onoffswitch-switch"></span>
										</label>
									</div>
								</div>
							</div>
						</li>

						<li>
							<div class="form-group">
								<label class="col-xs-8 control-label">Notifications</label>
								<div class="col-xs-4 control-label">
									<div class="onoffswitch greensea">
										<input type="checkbox" name="onoffswitch"
											class="onoffswitch-checkbox" id="show-notifications"> <label
											class="onoffswitch-label" for="show-notifications"> <span
											class="onoffswitch-inner"></span> <span
											class="onoffswitch-switch"></span>
										</label>
									</div>
								</div>
							</div>
						</li>

						<li>
							<div class="form-group">
								<label class="col-xs-8 control-label">Show Undread Count</label>
								<div class="col-xs-4 control-label">
									<div class="onoffswitch greensea">
										<input type="checkbox" name="onoffswitch"
											class="onoffswitch-checkbox" id="show-unread" checked=""> <label
											class="onoffswitch-label" for="show-unread"> <span
											class="onoffswitch-inner"></span> <span
											class="onoffswitch-switch"></span>
										</label>
									</div>
								</div>
							</div>
						</li>

					</ul>

				</div>
				<!-- tab-pane -->

			</div>
			<!-- tab-content -->
		</div>






	</div>
	<!-- Make page fluid-->




	</div>
	<!-- Wrap all page content end -->



	<section class="videocontent" id="video"></section>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- 	<script src="users/js/jquery.js"></script> -->
	<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- 	<script src="users/js/vendor/bootstrap/bootstrap.min.js"></script> -->
	<script
		src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=sons-of-obsidian"></script>
<!-- 	<script type="text/javascript"
		src="users/js/vendor/mmenu/js/jquery.mmenu.min.js"></script> -->
<!-- 	<script type="text/javascript" -->
<!-- 		src="users/js/vendor/sparkline/jquery.sparkline.min.js"></script> -->
<!-- 	<script type="text/javascript" -->
<!-- 		src="users/js/vendor/nicescroll/jquery.nicescroll.min.js"></script> -->
<!-- 	<script type="text/javascript" -->
<!-- 		src="users/js/vendor/animate-numbers/jquery.animateNumbers.js"></script> -->
<!-- 	<script type="text/javascript" -->
<!-- 		src="users/js/vendor/videobackground/jquery.videobackground.js"></script> -->
<!-- 	<script type="text/javascript" -->
<!-- 		src="users/js/vendor/blockui/jquery.blockUI.js"></script> -->

<!-- 	<script src="users/js/vendor/datatables/jquery.dataTables.min.js"></script> -->
<!-- 	<script src="users/js/vendor/datatables/ColReorderWithResize.js"></script> -->
<!-- 	<script -->
<!-- 		src="users/js/vendor/datatables/colvis/dataTables.colVis.min.js"></script> -->
<!-- 	<script src="users/js/vendor/datatables/tabletools/ZeroClipboard.js"></script> -->
<!-- 	<script -->
<!-- 		src="users/js/vendor/datatables/tabletools/dataTables.tableTools.min.js"></script> -->
<!-- 	<script src="users/js/vendor/datatables/dataTables.bootstrap.js"></script> -->

<!-- 	<script src="users/js/vendor/chosen/chosen.jquery.min.js"></script> -->

<!-- 	<script src="users/js/minimal.min.js"></script> -->
<?php $this->endBody()?>
	<script>
    $(function(){

      // Add custom class to pagination div
      $.fn.dataTableExt.oStdClasses.sPaging = 'dataTables_paginate paging_bootstrap paging_custom';

      /*************************************************/
      /**************** BASIC DATATABLE ****************/
      /*************************************************/

      /* Define two custom functions (asc and desc) for string sorting */
      jQuery.fn.dataTableExt.oSort['string-case-asc']  = function(x,y) {
          return ((x < y) ? -1 : ((x > y) ?  1 : 0));
      };
       
      jQuery.fn.dataTableExt.oSort['string-case-desc'] = function(x,y) {
          return ((x < y) ?  1 : ((x > y) ? -1 : 0));
      };

      /* Add a click handler to the rows - this could be used as a callback */
      $("#basicDataTable tbody tr").click( function( e ) {
        if ( $(this).hasClass('row_selected') ) {
          $(this).removeClass('row_selected');
        }
        else {
          oTable01.$('tr.row_selected').removeClass('row_selected');
          $(this).addClass('row_selected');
        }

        // FadeIn/Out delete rows button
        if ($('#basicDataTable tr.row_selected').length > 0) {
          $('#deleteRow').stop().fadeIn(300);
        } else {
          $('#deleteRow').stop().fadeOut(300);
        }
      });

      /* Build the DataTable with third column using our custom sort functions */
      var oTable01 = $('#basicDataTable').dataTable({
        "sDom":
          "R<'row'<'col-md-6'l><'col-md-6'f>r>"+
          "t"+
          "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
        "oLanguage": {
          "sSearch": ""
        },
        "aaSorting": [ [0,'asc'], [1,'asc'] ],
        "aoColumns": [
          null,
          null,
          { "sType": 'string-case' },
          null,
          null
        ],
        "fnInitComplete": function(oSettings, json) { 
          $('.dataTables_filter input').attr("placeholder", "Search");
        }
      });

      // Append delete button to table
      var deleteRowLink = '<a href="#" id="deleteRow" class="btn btn-red btn-xs delete-row">Delete selected row</a>'
      $('#basicDataTable_wrapper').append(deleteRowLink);

      /* Add a click handler for the delete row */
      $('#deleteRow').click( function() {
        var anSelected = fnGetSelected(oTable01);
        if (anSelected.length !== 0 ) {
          oTable01.fnDeleteRow(anSelected[0]);
          $('#deleteRow').stop().fadeOut(300);
        }
      });

      /* Get the rows which are currently selected */
      function fnGetSelected(oTable01Local){
        return oTable01Local.$('tr.row_selected');
      };

      /*******************************************************/
      /**************** INLINE EDIT DATATABLE ****************/
      /*******************************************************/

      function restoreRow (oTable02, nRow){
        var aData = oTable02.fnGetData(nRow);
        var jqTds = $('>td', nRow);
        
        for ( var i=0, iLen=jqTds.length ; i<iLen ; i++ ) {
          oTable02.fnUpdate( aData[i], nRow, i, false );
        }
        
        oTable02.fnDraw();
      };

      function editRow (oTable02, nRow){
        var aData = oTable02.fnGetData(nRow);
        var jqTds = $('>td', nRow);
        jqTds[0].innerHTML = '<input type="text" value="'+aData[0]+'">';
        jqTds[1].innerHTML = '<input type="text" value="'+aData[1]+'">';
        jqTds[2].innerHTML = '<input type="text" value="'+aData[2]+'">';
        jqTds[3].innerHTML = '<input type="text" value="'+aData[3]+'">';
        jqTds[4].innerHTML = '<input type="text" value="'+aData[4]+'">';
        jqTds[5].innerHTML = '<a class="edit save" href="#">Save</a><a class="delete" href="#">Delete</a>';
      };

      function saveRow (oTable02, nRow){
        var jqInputs = $('input', nRow);
        oTable02.fnUpdate( jqInputs[0].value, nRow, 0, false );
        oTable02.fnUpdate( jqInputs[1].value, nRow, 1, false );
        oTable02.fnUpdate( jqInputs[2].value, nRow, 2, false );
        oTable02.fnUpdate( jqInputs[3].value, nRow, 3, false );
        oTable02.fnUpdate( jqInputs[4].value, nRow, 4, false );
        oTable02.fnUpdate( '<a class="edit" href="#">Edit</a><a class="delete" href="#">Delete</a>', nRow, 5, false );
        oTable02.fnDraw();
      };



      var oTable02 = $('#inlineEditDataTable').dataTable({
        "sDom":
          "R<'row'<'col-md-6'l><'col-md-6'f>r>"+
          "t"+
          "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
        "oLanguage": {
          "sSearch": ""
        },
        "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ "no-sort" ] }
        ],
        "fnInitComplete": function(oSettings, json) { 
          $('.dataTables_filter input').attr("placeholder", "Search");
        }
      });

      // Append add row button to table
      var addRowLink = '<a href="#" id="addRow" class="btn btn-green btn-xs add-row">Add row</a>'
      $('#inlineEditDataTable_wrapper').append(addRowLink);

      var nEditing = null;

      // Add row initialize
      $('#addRow').click( function (e) {
        e.preventDefault();

        // Only allow a new row when not currently editing
        if ( nEditing !== null ) {
          return;
        }
        
        var aiNew = oTable02.fnAddData([ '', '', '', '', '', '<a class="edit" href="">Edit</a>', '<a class="delete" href="">Delete</a>' ]);
        var nRow = oTable02.fnGetNodes(aiNew[0]);
        editRow(oTable02, nRow);
        nEditing = nRow;

        $(nRow).find('td:last-child').addClass('actions text-center');
      });

      // Delete row initialize
      $(document).on( "click", "#inlineEditDataTable a.delete", function(e) {
        e.preventDefault();
        
        var nRow = $(this).parents('tr')[0];
        oTable02.fnDeleteRow( nRow );
      });

      // Edit row initialize
      $(document).on( "click", "#inlineEditDataTable a.edit", function(e) {
        e.preventDefault();
         
        /* Get the row as a parent of the link that was clicked on */
        var nRow = $(this).parents('tr')[0];
         
        if (nEditing !== null && nEditing != nRow){
          /* A different row is being edited - the edit should be cancelled and this row edited */
          restoreRow(oTable02, nEditing);
          editRow(oTable02, nRow);
          nEditing = nRow;
        }
        else if (nEditing == nRow && this.innerHTML == "Save") {
          /* This row is being edited and should be saved */
          saveRow(oTable02, nEditing);
          nEditing = null;
        }
        else {
          /* No row currently being edited */
          editRow(oTable02, nRow);
          nEditing = nRow;
        }
      });

      /******************************************************/
      /**************** DRILL DOWN DATATABLE ****************/
      /******************************************************/

      var anOpen = [];

      var oTable03 = $('#drillDownDataTable').dataTable({
        "sDom":
          "R<'row'<'col-md-6'l><'col-md-6'f>r>"+
          "t"+
          "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
        "oLanguage": {
          "sSearch": ""
        },
        "aoColumnDefs": [
          { 'bSortable': false, 'aTargets': [ "no-sort" ] }
        ],
        "aaSorting": [[ 1, "asc" ]],
        "bProcessing": true,
        "sAjaxSource": "users/js/vendor/datatables/ajax/sources/objects.txt",
        "aoColumns": [
          {
            "mDataProp": null,
            "sClass": "control text-center",
            "sDefaultContent": '<a href="#"><i class="fa fa-plus"></i></a>'
          },
          { "mDataProp": "engine" },
          { "mDataProp": "browser" },
          { "mDataProp": "grade" }
        ],
        "fnInitComplete": function(oSettings, json) { 
          $('.dataTables_filter input').attr("placeholder", "Search");
        }
      });

      $(document).on( 'click', '#drillDownDataTable td.control', function () {
        var nTr = this.parentNode;
        var i = $.inArray( nTr, anOpen );

        $(anOpen).each( function () {
          if ( this !== nTr ) {
            $('td.control', this).click();
          }
        });
        
        if ( i === -1 ) {
          $('i', this).removeClass().addClass('fa fa-minus');
          $(this).parent().addClass('drilled');
          var nDetailsRow = oTable03.fnOpen( nTr, fnFormatDetails(oTable03, nTr), 'details' );
          $('div.innerDetails', nDetailsRow).slideDown();
          anOpen.push( nTr );
        }
        else {
          $('i', this).removeClass().addClass('fa fa-plus');
          $(this).parent().removeClass('drilled');
          $('div.innerDetails', $(nTr).next()[0]).slideUp( function () {
            oTable03.fnClose( nTr );
            anOpen.splice( i, 1 );
          } );
        }

        return false;
      });
       
      function fnFormatDetails( oTable03, nTr ){
        var oData = oTable03.fnGetData( nTr );
        var sOut =
          '<div class="innerDetails">'+
            '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
              '<tr><td>Rendering engine:</td><td>'+oData.engine+'</td></tr>'+
              '<tr><td>Browser:</td><td>'+oData.browser+'</td></tr>'+
              '<tr><td>Platform:</td><td>'+oData.platform+'</td></tr>'+
              '<tr><td>Version:</td><td>'+oData.version+'</td></tr>'+
              '<tr><td>Grade:</td><td>'+oData.grade+'</td></tr>'+
            '</table>'+
          '</div>';
        return sOut;
      };

      /****************************************************/
      /**************** ADVANCED DATATABLE ****************/
      /****************************************************/

      var oTable04 = $('#advancedDataTable').dataTable({
        "sDom":
          "<'row'<'col-md-4'l><'col-md-4 text-center sm-left'T C><'col-md-4'f>r>"+
          "t"+
          "<'row'<'col-md-4 sm-center'i><'col-md-4'><'col-md-4 text-right sm-center'p>>",
         "oLanguage": {
          "sSearch": ""
        },
        "oTableTools": {
          "sSwfPath": "users/js/vendor/datatables/tabletools/swf/copy_csv_xls_pdf.swf",
          "aButtons": [
            "copy",
            "print",
            {
              "sExtends":    "collection",
              "sButtonText": 'Save <span class="caret" />',
              "aButtons":    [ "csv", "xls", "pdf" ]
            }
          ]
        },
        "fnInitComplete": function(oSettings, json) { 
          $('.dataTables_filter input').attr("placeholder", "Search");
        },
        "oColVis": {
          "buttonText": '<i class="fa fa-eye"></i>'
        }
      });

      $('.ColVis_MasterButton').on('click', function(){
        var newtop = $('.ColVis_collection').position().top - 45; 

        $('.ColVis_collection').addClass('dropdown-menu');
        $('.ColVis_collection>li>label').addClass('btn btn-default')     
        $('.ColVis_collection').css('top', newtop + 'px');
      });

      $('.DTTT_button_collection').on('click', function(){
        var newtop = $('.DTTT_dropdown').position().top - 45;   
        $('.DTTT_dropdown').css('top', newtop + 'px');
      });

      //initialize chosen
      $('.dataTables_length select').chosen({disable_search_threshold: 10});
      
    })
      
    </script>
    
</body>
</html>
<?php $this->endPage()?>
