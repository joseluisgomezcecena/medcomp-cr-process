<style>
	.cover{
		position: absolute;
		height: 100%;
		width: 100%;
		display: block;
		background-color: #171717;
		opacity: 0.20;
		border-radius: 15px;
	}
</style>
<div class="container mt-5">
	<div class="row">
		<div class="col-lg-8 mb-4 order-0">

			<div style="background-image: url('<?php echo base_url() ?>assets/images/hero/home.jpg'); background-size: cover; background-position: right bottom; height: 300px" class="card">
				<div style="z-index: 9999;" class="d-flex align-items-end row">
					<div class="col-sm-7">
						<div class="card-body">
							<h5 style="font-weight: bold; z-index: 9999; text-shadow: 2px 2px 4px black;" class="card-title text-white">MedComp CR Application 💻📁</h5>


							<p style="z-index: 9999; text-shadow: 2px 2px 4px black;" class="mb-4 text-white">Enter your username and password to view or open a new CR.</p>
							<br><br><br>


							<a style="z-index: 9999" href="<?php echo base_url() ?>admins" class="btn btn-secondary">
								Login and View CRs
							</a>
						</div>
					</div>
					<div class="col-sm-5 text-center text-sm-left">
						<div class="card-body pb-0 px-0 px-md-4">
							<!--
							<img src="http://localhost/computer_based_training/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
							-->
						</div>
					</div>
				</div>

				<div class="cover"></div>


			</div>
		</div>

		<div class="col-lg-4 col-sm-12 col-md-12 mb-2 order-1">
			<div style="height: 300px;" class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
						<div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
							<div class="card-title">
								<h5 style="font-weight: bolder;" class="text-nowrap mb-2">Register and Login</h5>
								<small class="text-dark fw-semibold mb-5">You must have an active account before you can use this app.</small>
								<div>
									<br><br><br><br/>
									<!--
									<a href="http://localhost/computer_based_training/users/login" class="btn btn-dark mt-2">Inicio de Sesión</a>
									<br><br>
									-->
									<a href="http://mxmtsvrandon1/authentication/index.php/home/register" target="_blank" class="mt-5">Register a new account ></a>
									<br><br>
									<a href="http://mxmtsvrandon1/authentication/index.php/reset-password" target="_blank" class="mt-5">I Forgot my password ></a>
								</div>

							</div>


						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- / Content -->




