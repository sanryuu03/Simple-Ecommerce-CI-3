        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        	<!-- Main Content -->
        	<div id="content">

        		<!-- Topbar -->
        		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        			<!-- Sidebar Toggle (Topbar) -->
        			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        				<i class="fa fa-bars"></i>
        			</button>

        			<!-- Topbar Search -->
        			<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        				<div class="input-group">
        					<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        					<div class="input-group-append">
        						<button class="btn btn-primary" type="button">
        							<i class="fas fa-search fa-sm"></i>
        						</button>
        					</div>
        				</div>
        			</form>

        			<!-- Topbar Navbar -->
        			<ul class="navbar-nav ml-auto">

        				<!-- Nav Item - Search Dropdown (Visible Only XS) -->
        				<li class="nav-item dropdown no-arrow d-sm-none">
        					<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        						<i class="fas fa-search fa-fw"></i>
        					</a>
        				</li>

        				<div class="topbar-divider d-none d-sm-block"></div>

        				<!-- Nav Item - User Information -->
        				<li class="nav-item dropdown no-arrow">
        					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        						<span class="mr-2 d-none d-lg-inline text-gray-600 small">San</span>
        						<img class="img-profile rounded-circle" src="<?php echo base_url() ?>assets/img/undraw_profile.svg">
        					</a>
        					<!-- Dropdown - User Information -->
        					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        						<a class="dropdown-item" href="#">
        							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        							Profile
        						</a>
        						<a class="dropdown-item" href="#">
        							<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
        							Settings
        						</a>
        						<a class="dropdown-item" href="#">
        							<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
        							Activity Log
        						</a>
        						<div class="dropdown-divider"></div>
        						<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        							Logout
        						</a>
        					</div>
        				</li>

        			</ul>

        		</nav>
        		<!-- End of Topbar -->

        		<!-- Begin Page Content -->
        		<div class="container-fluid">

        			<!-- Page Heading -->
        			<div class="d-sm-flex align-items-center justify-content-between mb-4">
        				<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        			</div>
        		</div>
        		<!-- /.container-fluid -->

        		<div class="container-fluid">
        			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        				<ol class="carousel-indicators">
        					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        				</ol>
        				<div class="carousel-inner">
        					<div class="carousel-item active">
        						<img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
        					</div>
        					<div class="carousel-item">
        						<img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
        					</div>
        				</div>
        				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
        					<span class="sr-only">Previous</span>
        				</a>
        				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        					<span class="carousel-control-next-icon" aria-hidden="true"></span>
        					<span class="sr-only">Next</span>
        				</a>
        			</div>


        			<div class="row text-center mt-4">
        				<?php foreach ($barang as $item) : ?>
        					<div class="card ml-3 mb-3" style="width: 16rem;">
        						<img src="<?php echo base_url() . '/uploads/' . $item->gambar ?>" class="card-img-top" alt="...">
        						<div class="card-body">
        							<h5 class="card-title mb-1"><?php echo $item->nama_barang ?></h5>
        							<small><?php echo $item->deskripsi ?></small>
        							<br>
        							<span class="badge badge-success mb-3">Rp. <?php echo $item->harga ?></span>
        							<br>
        							<a href="#" class="btn btn-sm btn-primary">add to cart</a>
        							<a href="#" class="btn btn-sm btn-success">details</a>
        						</div>
        					</div>
        				<?php endforeach; ?>
        			</div>
        		</div>

        	</div>
        	<!-- End of Main Content -->

        	<!-- Footer -->
        	<footer class="sticky-footer bg-white">
        		<div class="container my-auto">
        			<div class="copyright text-center my-auto">
        				<span>Copyright &copy; Your Website 2021</span>
        			</div>
        		</div>
        	</footer>
        	<!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
        	<i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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