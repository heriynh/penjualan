<?= $this->extend('templates/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">DETAIL USER</h1>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?= base_url('img/'. $user->user_image); ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $user->username; ?></h5>
        <?php if($user->fullname): ?>
        <p class="card-text"><?= $user->fullname; ?></p>
        <?php endif; ?>
        <p class="card-text"><?= $user->email; ?></p>
        <p class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning' ; ?> "> <?= $user->name; ?></p>
    	<p><a href="<?= base_url('admin'); ?>"> &laquo; Back</a></p>
      </div>
    </div>
  </div>
</div>
                </div>
<?= $this->endSection(); ?>