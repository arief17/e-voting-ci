<?= $this->extend('layouts/master_voting') ?>

<?= $this->section('title') ?>
    <?= $title; ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<?= $this->include('partials/partials_user/navbar') ?>

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-12 col-sm-6 pt-5 mt-2 order-sm-2">
							<img src="/assets/img/undraw_security_o890.svg" alt="img evoting" class="img-fluid">
					</div>
					<div class="col-12 col-sm-6 pt-5 order-sm-1">
						<span class="title text-uppercase">
							<h2>evoting osis app</h2>
						</span>
						<span class="subtitle mt-1 mb-2">
							<h4>Selamat datang di aplikasi evoting, silahkan masukan token untuk memilih</h4>
						</span>

						<?php if (isset($validation)) : ?>
			              <div class="alert alert-danger" role="alert">
			                <?= $validation->listErrors() ?>
			              </div>
			          <?php endif; ?>

			          <!-- untuk pesan session -->
			            <?php if (session()->has('danger')) : ?>
			              <div class="alert alert-danger" role="alert">
			                <?= session()->getFlashdata('danger') ?>
			              </div>
			            <?php endif; ?>

			             <?php if (session()->has('success')) : ?>
			              <div class="alert alert-success" role="alert">
			                <?= session()->getFlashdata('success') ?>
			              </div>
			            <?php endif; ?>

						<div class="row mt-3">
							<div class="col-8">
								<form action="<?= base_url('voting') ?>" method="post">
									<?= csrf_field() ?>

									<div class="form-group">
									    <input type="text" name="token" class="form-control" placeholder="Masukan token disini">
									  </div>
							</div>
							<div class="col">
								<button class="btn-token btn btn-warning text-white">Submit</button>
							</div>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<?= $this->include('partials/partials_user/footer') ?>
<?= $this->endSection() ?>