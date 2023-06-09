<?php include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
use BITM\SEIP12\DB;


$pdo_statement = DB::db_connection()->prepare("SELECT * FROM user_details where id=".$_GET['id']);
$pdo_statement->execute();
$user = $pdo_statement->fetchAll();
// dd($user);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Campus Canteen</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="../../../../global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="../../../../global_assets/js/main/jquery.min.js"></script>
    <script src="../../../../global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="../../../../global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="../../../../global_assets/js/plugins/ui/ripple.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="../../../../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="../../../../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="../../../../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="../../../../global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="../../../../global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="../../../../global_assets/js/demo_pages/dashboard.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
    <script src="../../../../global_assets/js/demo_charts/pages/dashboard/light/bullets.js"></script>


    <!-- For Select -->
    <script src="../../../../global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="../../../../global_assets/js/demo_pages/form_select2.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-dark bg-indigo navbar-static">
    <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <!--				<img src="../../../../global_assets/images/logo_light.png" alt="">-->
            <h3 class="text-light">Campus Canteen</h3>
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <span class="navbar-text ml-md-3">
				<span class="badge badge-mark border-orange-300 mr-2"></span>
				Morning, pCosta.
			</span>

        <ul class="navbar-nav ml-md-auto">
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-make-group mr-2"></i>
                    Connect
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-body p-2">
                        <div class="row no-gutters">
                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-github4 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Github</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-dropbox text-blue-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dropbox</div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-dribbble3 text-pink-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Dribbble</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-google-drive text-success-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Drive</div>
                                </a>
                            </div>

                            <div class="col-12 col-sm-4">
                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-twitter text-info-400 icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Twitter</div>
                                </a>

                                <a href="#" class="d-block text-default text-center ripple-dark rounded p-3">
                                    <i class="icon-youtube text-danger icon-2x"></i>
                                    <div class="font-size-sm font-weight-semibold text-uppercase mt-2">Youtube</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-pulse2 mr-2"></i>
                    Activity
                </a>

                <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                    <div class="dropdown-content-header">
                        <span class="font-size-sm line-height-sm text-uppercase font-weight-semibold">Latest activity</span>
                        <a href="#" class="text-default"><i class="icon-search4 font-size-base"></i></a>
                    </div>

                    <div class="dropdown-content-body dropdown-scrollable">
                        <ul class="media-list">
                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-success-400 rounded-round btn-icon"><i class="icon-mention"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"
                                    <div class="font-size-sm text-muted mt-1">4 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-pink-400 rounded-round btn-icon"><i class="icon-paperplane"></i></a>
                                </div>

                                <div class="media-body">
                                    Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>
                                    <div class="font-size-sm text-muted mt-1">36 minutes ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-blue rounded-round btn-icon"><i class="icon-plus3"></i></a>
                                </div>

                                <div class="media-body">
                                    <a href="#">Chris Arney</a> created a new <span class="font-weight-semibold">Design</span> branch in <span class="font-weight-semibold">Limitless</span> repository
                                    <div class="font-size-sm text-muted mt-1">2 hours ago</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-purple-300 rounded-round btn-icon"><i class="icon-truck"></i></a>
                                </div>

                                <div class="media-body">
                                    Shipping cost to the Netherlands has been reduced, database updated
                                    <div class="font-size-sm text-muted mt-1">Feb 8, 11:30</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-warning-400 rounded-round btn-icon"><i class="icon-comment"></i></a>
                                </div>

                                <div class="media-body">
                                    New review received on <a href="#">Server side integration</a> services
                                    <div class="font-size-sm text-muted mt-1">Feb 2, 10:20</div>
                                </div>
                            </li>

                            <li class="media">
                                <div class="mr-3">
                                    <a href="#" class="btn bg-teal-400 rounded-round btn-icon"><i class="icon-spinner11"></i></a>
                                </div>

                                <div class="media-body">
                                    <strong>January, 2018</strong> - 1320 new users, 3284 orders, $49,390 revenue
                                    <div class="font-size-sm text-muted mt-1">Feb 1, 05:46</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown-content-footer bg-light">
                        <a href="#" class="font-size-sm line-height-sm text-uppercase font-weight-semibold text-grey mr-auto">All activity</a>
                        <div>
                            <a href="#" class="text-grey" data-popup="tooltip" title="Clear list"><i class="icon-checkmark3"></i></a>
                            <a href="#" class="text-grey ml-2" data-popup="tooltip" title="Settings"><i class="icon-gear"></i></a>
                        </div>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-switch2"></i>
                    <span class="d-md-none ml-2">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-light sidebar-main sidebar-expand-md">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            <span class="font-weight-semibold">Navigation</span>
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">

            <!-- User menu -->
            <div class="sidebar-user-material">
                <div class="sidebar-user-material-body">
                    <div class="card-body text-center">
                        <a href="#">
                            <img src="../../../../global_assets/images/placeholders/pCosta.png" class="img-fluid rounded-circle shadow-1 mb-3" width="80" height="80" alt="">
                        </a>
                        <h6 class="mb-0 text-white text-shadow-dark">pCosta</h6>
                        <span class="font-size-sm text-white text-shadow-dark">Nodda, Gulshan-1, Dhaka</span>
                    </div>

                    <div class="sidebar-user-material-footer">
                        <a href="#user-nav" class="d-flex justify-content-between align-items-center text-shadow-dark dropdown-toggle" data-toggle="collapse"><span>My account</span></a>
                    </div>
                </div>

                <div class="collapse" id="user-nav">
                    <ul class="nav nav-sidebar">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-user-plus"></i>
                                <span>My profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-coins"></i>
                                <span>My balance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-comment-discussion"></i>
                                <span>Messages</span>
                                <span class="badge bg-teal-400 badge-pill align-self-center ml-auto">58</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-cog5"></i>
                                <span>Account settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-switch2"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /user menu -->


            <!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<!-- <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li> -->

						<li class="nav-item">
							<a href="index.html" class="nav-link active">
								<i class="icon-home4"></i>
								<span>
									Dashboard
								</span>
							</a>
						</li>

						<!-- POS -->
						<li class="nav-item">
							<a href="pos_index.html" class="nav-link active">
								<i class="icon-printer4"></i>
								<span>
									POS
								</span>
							</a>
						</li>

						<!-- Category -->
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-users2 mr-3"></i> <span>Castomers</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_customer.html" class="nav-link active">Add Castomer</a></li>
								<li class="nav-item"><a href="customers.html" class="nav-link active">Castomers</a></li>
							</ul>
						</li>

						<!-- Category -->
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-list mr-3"></i> <span>Category</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_category.html" class="nav-link active">Add Category</a></li>
								<li class="nav-item"><a href="categories.html" class="nav-link active">Categories</a></li>
							</ul>
						</li>

						<!-- Product -->
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-basket mr-3"></i> <span>Product</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_product.html" class="nav-link active">Add Product</a></li>
								<li class="nav-item"><a href="products.html" class="nav-link active">Products</a></li>
							</ul>
						</li>

						<!-- Out Door Places -->
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-exit3 mr-3"></i> <span>Outdoor Place</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_outdoor_place.html" class="nav-link active">Add Outdoor Place</a></li>
								<li class="nav-item"><a href="outdoor_places.html" class="nav-link active">Outdoor Places</a></li>
							</ul>
						</li>

						<!-- Orders -->
						<li class="nav-item">
							<a href="orders.html" class="nav-link active">
								<i class="icon-compose"></i>
								<span>
									Orders
								</span>
							</a>
						</li>

						<!-- Settings -->
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-cogs mr-3"></i> <span>Settings</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="add_user.html" class="nav-link active">Add User</a></li>
								<li class="nav-item"><a href="users.html" class="nav-link active">Users</a></li>
								<li class="nav-item"><a href="user_roles.html" class="nav-link active">User Roles</a></li>
								<li class="nav-item"><a href="#" class="nav-link active">Permishions</a></li>
							</ul>
						</li>

						<!-- App Config -->
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link"><i class="icon-android mr-3"></i> <span>App configuration</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Layouts">
								<li class="nav-item"><a href="app_config.html" class="nav-link active">App Config</a></li>
								<li class="nav-item"><a href="banner_images.html" class="nav-link active">Banner Images</a></li>
								<li class="nav-item"><a href="privecy_policy_page_setup.html" class="nav-link active">Privecy And Policy Page</a></li>
								<li class="nav-item"><a href="about_page_setup.html" class="nav-link active">About Page</a></li>
							</ul>
						</li>
						<!-- /page kits -->

					</ul>
				</div>
				<!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                            <i class="icon-bars-alt text-pink-300"></i>
                            <span>Statistics</span>
                        </a>
                        <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                            <i class="icon-calculator text-pink-300"></i>
                            <span>Invoices</span>
                        </a>
                        <a href="#" class="btn btn-link btn-float font-size-sm font-weight-semibold text-default">
                            <i class="icon-calendar5 text-pink-300"></i>
                            <span>Schedule</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">Add User</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <h3>Edit User</h3>
            <form action="UserController.php" method="post">
            <div class="row">
                <div class="col-md-12">
                <div class="form-group row">
                        <label class="col-form-label col-lg-2">User Name<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="username" class="form-control" placeholder="Enter user name..." value="<?=$user[0]['username']?>">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Frist Name<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="first_name" class="form-control" placeholder="Enter user first name..." value="<?=$user[0]['first_name']?>">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Last Name</label>
                        <div class="col-lg-10">
                            <input type="text" name="last_name" class="form-control" placeholder="Enter user last name..." value="<?=$user[0]['last_name']?>">
                        </div>
                    </div>
                    
    
                    <!-- <div class="form-group row">
                        <label class="col-form-label col-lg-2">Email<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" placeholder="Enter email address...">
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Phone</label>
                        <div class="col-lg-10">
                            <textarea type="text" class="form-control"></textarea>
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Image</label>
                        <div class="col-lg-10">
                            <div class="uniform-uploader"><input type="file" class="form-control-uniform" data-fouc=""><span class="filename" style="user-select: none;">No file selected</span><span class="action btn btn-light legitRipple" style="user-select: none;">Choose File</span></div>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Gender<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="text" name="gender" class="form-control" placeholder="Enter user gender..." value="<?=$user[0]['gender']?>">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-6"> -->
                
                    <!-- <div class="form-group row">
                        <label class="col-form-label col-lg-2">Address</label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" placeholder="Enter your address...">
                        </div>
                    </div> -->
<!-- 
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Role<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
							<select class="form-control select" data-fouc>
								<optgroup label="Adminetration">
									<option value="AZ">Supper Admin</option>
									<option value="CO">Admin</option>						
								</optgroup>
								<optgroup label="User">
									<option value="AL">User</option>							
								</optgroup>
							</select>
                        </div>
                    </div> -->

                    <!-- <div class="form-group row">
                        <label class="col-form-label col-lg-2">Password<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input name="password" type="password" class="form-control" placeholder="Enter password...">
                        </div>
                    </div> -->

                    <!-- <div class="form-group row">
                        <label class="col-form-label col-lg-2">Confirm Password<span class="text-danger">*</span></label>
                        <div class="col-lg-10">
                            <input type="email" class="form-control" placeholder="Confirm password...">
                        </div>
                    </div> -->
                <!-- </div> -->
            </div> 
            <div class="ps-5">
                <div class="text-start">
                <input type="hidden" name="id" value="<?=$user[0]['id']?>">
                <input name="edit_record" type="submit" value="Edit" class="btn btn-info btn-sm"/>
                </div>
            </div>
            </form>
        </div>
        <!-- /content area -->


        <!-- Footer -->
        <div class="navbar navbar-expand-lg navbar-light">
            <div class="text-center d-lg-none w-100">
                <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                    <i class="icon-unfold mr-2"></i>
                    Footer
                </button>
            </div>

            <div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						&copy; 2022 - 2023 <a href="#">Campus Canteen</a> by <a href="https://github.com/Prince-Costa" target="_blank">Prince Costa</a>
					</span>

                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item"><a href="https://kopyov.ticksy.com/" class="navbar-nav-link" target="_blank"><i class="icon-lifebuoy mr-2"></i> Support</a></li>
                    <li class="nav-item"><a href="http://demo.interface.club/limitless/docs/" class="navbar-nav-link" target="_blank"><i class="icon-file-text2 mr-2"></i> Docs</a></li>
                    <li class="nav-item"><a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov" class="navbar-nav-link font-weight-semibold"><span class="text-pink-400"><i class="icon-cart2 mr-2"></i> Purchase</span></a></li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
