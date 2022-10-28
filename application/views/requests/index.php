<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"><?= $title ?></h4>


<?php if($this->session->flashdata('deleted')): ?>
	<div class="alert alert-primary alert-dismissible fade show">

		<div class="d-flex justify-content-start">
        <span class="alert-icon m-r-20 font-size-30">
            <i class="anticon anticon-check-circle"></i>
        </span>
			<div>
				<h5 class="alert-heading">Elemento eliminado</h5>
				<p><?php echo $this->session->flashdata('deleted'); ?></p>
			</div>
		</div>

		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
<?php endif; ?>


<?php echo validation_errors(); ?>

<div class="card">
	<div class="card-body">

		<a class="btn btn-primary mb-3 mt-3" href="<?php echo base_url() ?>requests/new">New CR</a>


		<h4><?= $title ?></h4>
		<p></p>
		<div class="m-t-25">
			<div class="table-responsive">
				<table id="data-table"  class="table mb-5 table-hover">
					<thead>
					<tr>
						<th scope="col">Change Review Id</th>
						<th scope="col">Originator</th>
						<th scope="col">Date</th>
						<th scope="col">Actions</th>
					</tr>
					</thead>
					<tbody>
					<?php foreach($requests as $request): ?>
					<tr>
						<th scope="row"><?php echo $request['cr_id'] ?></th>
						<td>
							<?php echo $request['originator'] ?>
						</td>
						<td>
							<?php echo $request['created_at'] ?>
						</td>
						<td  class="">
							<div class="dropdown dropdown-animated">
								<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
									<span>Actions</span>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="<?php echo base_url() ?>items/edit/<?php echo $request['cr_id'] ?>"><i class="fa fa-edit text-primary"></i> Editar</a>
									<a class="dropdown-item" href="<?php echo base_url() ?>items/delete/<?php echo $request['cr_id'] ?>"><i class="fa fa-trash-alt text-danger"></i> Eliminar</a>
								</div>
							</div>
						</td>
					</tr>
					<?php endforeach; ?>
					</tbody>

				</table>
				<div class="mt-5 mb-4">
					<!--
					Esta es una lista de los platillos que se encuentran en la base de datos.
					-->
				</div>
			</div>
		</div>
	</div>
</div>
