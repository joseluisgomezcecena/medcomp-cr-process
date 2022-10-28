<div class="app mt-5">
	<div class="container-fluid">
		<div class="d-flex full-height p-v-15 flex-column justify-content-between">

			<div class="container">
				<div class="row align-items-center">
					<div class="col-sm-12  col-lg-6 offset-lg-3">



						<?php echo validation_errors(); ?>

						<?php if($this->session->flashdata('login_success')): ?>

							<div class="alert alert_success">
								<strong class="uppercase"><bdi>Logged:</bdi></strong>
								Logged in.
								<button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
							</div>

						<?php endif; ?>

						<?php if($this->session->flashdata('login_failed')): ?>


							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<div class="d-flex align-items-center justify-content-start">
									<span class="alert-icon">
										<i class="anticon anticon-close-o"></i>
									</span>
									<span>Incorrect username and password combination.<br>Try again please.</span>
								</div>

							</div>

						<?php endif; ?>








						<div class="card">
							<div class="card-body">
								<h2 class="m-t-20">Sign-In</h2>
								<p class="m-b-30">Enter your credentials and login.</p>
								<?php echo form_open(base_url() . 'auth/login') ?>
								<div class="form-group">
									<label class="font-weight-semibold" for="userName">Email:</label>
									<div class="input-affix">
										<i class="prefix-icon anticon anticon-user"></i>
										<input type="email" class="form-control" name="username" id="userName" placeholder="Username">
									</div>
								</div>
								<div class="form-group">
									<label class="font-weight-semibold" for="password">Password:</label>
									<a class="float-right font-size-13 text-muted" href="">Forgot your password?</a>
									<div class="input-affix m-b-10">
										<i class="prefix-icon anticon anticon-lock"></i>
										<input type="password" class="form-control" name="password" id="password" placeholder="Password">
									</div>
								</div>
								<div class="form-group">
									<div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    Don't have an account?
                                                    <a class="small" href=""> Request an account.</a>
                                                </span>
										<button type="submit" class="btn btn-primary">LogIn</button>
									</div>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>
					<div class="offset-md-1 col-md-6 d-none d-md-block">
						<!--
						<img class="img-fluid" src="assets/images/others/login-2.png" alt="">
						-->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


