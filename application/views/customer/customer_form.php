<section class="content-header">
  <div class="container-fluid">
    <h1>Customer</h1>
  </div>
</section>
<!-- content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><?= ucfirst($page); ?> Customer</h3>
      <div class="float-right">
        <a href="<?= site_url('customer'); ?>" class="btn btn-warning">
          <i class="fas fa-undo"></i> Back
        </a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <form action="<?= site_url('customer/process'); ?>" method="post">
            <div class="form-group">
              <label for="customer_name">customer Name *</label>
              <input type="hidden" name="id" value="<?= $row->customer_id; ?>">
              <input type="text" class="form-control " id="customer_name" name="customer_name" value="<?= $row->name; ?>" required autofocus>
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <select name="gender" id="gender" class="form-control">
                <option>- Pilih -</option>
                <option value="L" <?= $row->gender == 'L' ? 'selected' : ''; ?>>Laki-laki</option>
                <option value="P" <?= $row->gender == 'P' ? 'selected' : ''; ?>>Perempuan</option>
              </select>
            </div>
            <div class="form-group">
              <label for="phone">Phone *</label>
              <input type="number" class="form-control " id="phone" name="phone" value="<?= $row->phone; ?>" required>
            </div>
            <div class="form-group">
              <label for="addr">Address *</label>
              <textarea type="text" class="form-control " id="addr" name="addr" required><?= $row->address; ?></textarea>
            </div>

            <div class="form-group">
              <button href="" name="<?= $page; ?>" class="btn btn-primary"> Save</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
</section>