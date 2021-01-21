<section class="content-header">
  <div class="container-fluid">
    <h1>Users</h1>
  </div>
</section>
<!-- content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Edit User</h3>
      <div class="float-right">
        <a href="<?= site_url('user'); ?>" class="btn btn-warning">
          <i class="fas fa-undo"></i> Back
        </a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <?php //echo validation_errors(); 
          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="fullname">Name *</label>
              <input type="hidden" name="user_id" value="<?= $row->user_id ?>">
              <input type="text" class="form-control <?= form_error('fullname') ? 'is-invalid' : null; ?> " id="fullname" name="fullname" value="<?= $this->input->post('fullname') ?? $row->name ?>" autofocus>
              <?= form_error('fullname'); ?>
            </div>
            <div class="form-group">
              <label for="username">Username *</label>
              <input type="text" class="form-control <?= form_error('username') ? 'is-invalid' : null; ?> " id="username" name="username" value="<?= $this->input->post('username') ?? $row->username ?>">
              <?= form_error('username'); ?>
            </div>
            <div class="form-group">
              <label for="password">Password</label> <small>(Biarkan kosong jika tidak diganti)</small>
              <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : null; ?>" id="password" name="password" value="<?= $this->input->post('password') ?>">
              <?= form_error('password'); ?>
            </div>
            <div class="form-group">
              <label for="passconf">Password Confirm</label>
              <input type="password" class="form-control <?= form_error('passconf') ? 'is-invalid' : null; ?>" id="passconf" name="passconf" value="<?= $this->input->post('passconf') ?>">
              <?= form_error('passconf'); ?>
            </div>
            <div class="form-group">
              <label for="address">Address</label>
              <textarea name="address" class="form-control" id="address"><?= $this->input->post('address') ?? $row->address ?></textarea>
            </div>
            <div class="form-group">
              <label>Level *</label>
              <select name="level" class="form-control <?= form_error('level') ? 'is-invalid' : null; ?>">
                <?= $level = $this->input->post('level') ?? $row->level; ?>
                <option value="1">Admin</option>
                <option value="2" <?= $level == 2 ? 'selected' : null; ?>>Kasir</option>
              </select>
              <?= form_error('level'); ?>
            </div>
            <div class="form-group">
              <button type="submit" value="=Submit" class="btn btn-success">Save</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </div>
        </form>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
</section>