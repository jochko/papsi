<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url(); ?>administrator" class="site_title"><i class="fa fa-thumbs-o-up"></i> <span>PAPSI CILETUH</span></a>
            </div>

            <div class="clearfix"></div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
				 <li><a href="<?php echo base_url(); ?>administrator"><i class="fa fa-dashboard"></i>Dashboard</a></li>
				 <li><a href="<?php echo base_url(); ?>pesanan"><i class="fa fa-file"></i>Pesanan</a></li>
				 <li><a href="<?php echo base_url(); ?>item"><i class="fa fa-edit"></i>Item</a></li>
				 <li><a href="<?php echo base_url(); ?>galeri"><i class="fa fa-pencil"></i>galeri</a></li>
				 <li><a href="<?php echo base_url(); ?>kategori"><i class="fa fa-pencil"></i>Kategori</a></li>
				 <li><a href="<?php echo base_url(); ?>rekening"><i class="fa fa-credit-card"></i>Rekening</a></li>
				 <li><a href="<?php echo base_url(); ?>laporan"><i class="fa fa-file-pdf-o"></i>Laporan</a></li>
				 <li><a href="<?php echo base_url(); ?>member"><i class="fa fa-users"></i>Member</a></li>
                
                </ul>
              </div>
			  </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <i class=" fa fa-user"></i> Administrator
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?= base_url();?>login_admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        