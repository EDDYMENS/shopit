<?php DvInclude($payload, 'header.blade.php'); ?>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Shopit</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="/assets/images/user.png" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <div class="dv-profile">
                                <h2> 
                                <span class="var-firstname"></span> <span class="var-lastname"></span>
                              </h2>
                            </div>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a href="/pages/home"><i class="fa fa-home"></i> Home</a>
                                </li>
                                <li><a><i class="fa fa-edit"></i> Orders <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/pages/orders/pending">Pending</a></li>
                                        <li><a href="/pages/orders/processed">Precessed</a></li>
                                        <li><a href="/pages/orders/cancelled">Cancelled</a></li>
                                    </ul>
                                </li>
                                <li><a href="/pages/products"><i class="fa fa-desktop"></i> Products</a>
                                </li>
                                <li><a href="/pages/categories"><i class="fa fa-table"></i> Categories </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="dv-profile" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/assets/images/user.png" alt="">
                    <span class="var-firstname"></span> <span class="var-lastname"></span>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    <li>
                                        <a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Categories<small>product Categories</small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".add-modal">Add Category</button>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-striped">
                                <tr>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                                <tbody class="dv-get-all:shopit:category">
                                    <tr>
                                        <td class="var-category_name">...</td>
                                        <td>
                                            <button type="button" class="btn btn-primary dv-update" data-toggle="modal" data-target=".update-modal">Edit</button>
                                            <button type="button" class="btn btn-danger dv-delete">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- <div class="dv-notify"></div>
                            <form class="dv-update-oneof:shopit:category">
                                <input type="text" class="form-control" name="category_name" placeholder="Category Name">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </form> -->
                            <div class="modal fade update-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title">Update Record</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="dv-notify"></div>
                                            <form action="#" class="dv-update-oneof:shopit:category">
                                                <input type="text" class="form-control" name="category_name" placeholder="Category Name">
                                                <br>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade add-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title">Add New Category</h4>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <div class="dv-notify-success" style="color: green">Added successfully</div>
                                            
                                            <form class="dv-add-oneto:shopit:category">
                                                <input type="text" class="form-control" name="category_name" placeholder="Category Name">
                                                <br>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /modals -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Delvess E-commerce
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
<?php DvInclude($payload, 'footer.blade.php'); ?>    
<script>
        devlessCallbacks(function (response) {
	   if(response.status_code == 609) {
       		window.location = location;    
       	   }	 
        });
    </script>

