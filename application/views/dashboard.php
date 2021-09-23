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
        							<?php echo anchor(
										'dashboard/add_to_cart/' . $item->id, '<div class = "btn btn-sm btn-primary" >add to cart</div>'
									) ?>
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