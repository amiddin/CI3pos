<section class="content-header">
  <div class="container-fluid">
    <h1>Customers</h1>
  </div>
</section>
<!-- content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Customer</h3>
      <div class="float-right">
        <a href="<?= site_url('customer/add'); ?>" class="btn btn-primary">
          <i class="fa fa-plus"></i> Create
        </a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
      <table class="table table-sm">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($row->result() as $key => $data) {  ?>
            <tr>
              <td><?= $no++; ?>.</td>
              <td><?= $data->name; ?></td>
              <td><?= $data->gender; ?></td>
              <td><?= $data->phone; ?></td>
              <td><?= $data->address; ?></td>
              <td class="text-center" width="160px">
                <a href="<?= site_url('customer/edit/' . $data->customer_id) ?>" class="btn btn-xs btn-primary">
                  <i class="fa fa-pencil-alt"></i> Edit
                </a>
                <a href="<?= site_url('customer/del/' . $data->customer_id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin?')">
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