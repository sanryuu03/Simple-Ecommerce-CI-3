        		<!-- Begin Page Content -->
        		<div class="container-fluid">

        			<!-- Page Heading -->
        			<div class="d-sm-flex align-items-center justify-content-between mb-4">
        				<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        			</div>
        		</div>
        		<!-- /.container-fluid -->

        		<div class="container-fluid">
        			<div class="row text-center mt-4">
        				<?php foreach ($audio as $item) : ?>
        					<div class="card ml-3 mb-3" style="width: 16rem;">
        						<img src="<?php echo base_url() . '/uploads/' . $item->gambar ?>" class="card-img-top" alt="...">
        						<div class="card-body">
        							<h5 class="card-title mb-1">
										<?php echo $item->nama_barang ?>
									</h5>
        							<small>
										<?php echo $item->deskripsi ?>
									</small>
        							<br>
        							<span class="badge badge-success mb-3">
										Rp. <?php echo number_format($item->harga), 0, ',', '.'  ?>
									</span>
        							<br>
        							<?php echo anchor('dashboard/add_to_cart/' . $item->id_barang,
									'<div class = "btn btn-sm btn-primary" >add to cart</div>'
									) ?>
        							<?php echo anchor('dashboard/detail/' . $item->id_barang,
									'<div class = "btn btn-sm btn-success" >detail</div>'
									) ?>
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