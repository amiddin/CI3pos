<section class="content-header">
  <div class="container-fluid">
    <h1>Units</h1>
  </div>
</section>
<!-- content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"><?= ucfirst($page); ?> unit</h3>
      <div class="float-right">
        <a href="<?= site_url('unit'); ?>" class="btn btn-warning">
          <i class="fas fa-undo"></i> Back
        </a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <form action="<?= site_url('unit/process'); ?>" method="post">
            <div class="form-group">
              <label for="unit_name">Unit Name *</label>
              <input type="hidden" name="id" value="<?= $row->unit_id; ?>">
              <input type="text" class="form-control " id="unit_name" name="unit_name" value="<?= $row->name; ?>" required autofocus>
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