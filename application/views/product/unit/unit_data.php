<section class="content-header">
  <div class="container-fluid">
    <h1>Units</h1>
  </div>
</section>
<!-- content -->
<section class="content">
  <?php $this->view('messages') ?>
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data unit</h3>
      <div class="float-right">
        <a href="<?= site_url('unit/add'); ?>" class="btn btn-primary">
          <i class="fa fa-plus"></i> Create
        </a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
      <table class="table table-bordered table-striped" id="table1">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($row->result() as $key => $data) {  ?>
            <tr>
              <td style="width: 10%;"><?= $no++; ?>.</td>
              <td><?= $data->name; ?></td>
              <td width="160px">
                <a href="<?= site_url('unit/edit/' . $data->unit_id) ?>" class="btn btn-xs btn-primary">
                  <i class="fa fa-pencil-alt"></i> Edit
                </a>
                <a href="<?= site_url('unit/del/' . $data->unit_id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin?')">
                  <i class="fa fa-trash"></i> Delete
                </a>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
</section>