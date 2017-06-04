<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="<?php echo base_url('Home');?>">
	        	<div class="">
	                <div class="">
	                    <img src="<?php echo base_url(); ?>assets/user/img/papsi4.png" alt="Papsi" rel="tooltip" title="<b>PAPSI </b> Paguyuban Alama Pakidulan Sukabumi</b>" data-placement="bottom" data-html="true">
	                </div>
	                


				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#" target="">
						<i class="material-icons">help</i>Cara Pesan
					</a>
				</li>
				
				<li>
					<a href="<?php echo base_url('Tentangkami');?>" target="">
						<i class="material-icons">account_box</i> Tentang Kami
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('item_user/kontak');?>" target="">
						<i class="material-icons">contacts</i>Kontak
					</a>
				</li>
				
				
				<?php
				if ($this->session->userdata('logged_in') == TRUE) { ?>
				<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <i class="material-icons">account_circle</i>Akun Saya
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?= base_url(); ?>login/profil">profil</a></li>
                                <li><a href="<?= base_url(); ?>cart/">Cek Pesanan</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url('login/logout');?>">Logout</a></li>
                              </ul>
                        </li>
				
				<? } else {	?>
				<li> 
				<a href="<?php echo base_url('login');?>">
				<i class="material-icons">account_circle</i>Login
				</a>
				</li>
				<? } ?>
				
				
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

