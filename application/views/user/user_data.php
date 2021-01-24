<section class="content-header">
  <div class="container-fluid">
    <h1>Users</h1>
  </div>
</section>
<!-- content -->
<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Users</h3>
      <div class="float-right">
        <a href="<?= site_url('user/add'); ?>" class="btn btn-primary">
          <i class="fa fa-user-plus"></i> Create
        </a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive">
      <table class="table table-bordered table-striped" id="table1">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Username</th>
            <th>Name</th>
            <th>Address</th>
            <th>Level</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($row->result() as $key => $data) {  ?>
            <tr>
              <td><?= $no++; ?>.</td>
              <td><?= $data->username; ?></td>
              <td><?= $data->name; ?></td>
              <td><?= $data->address; ?></td>
              <td><?= $data->level == 1 ? "Admin" : "Kasir"; ?></td>
              <td class="text-center" width="160px">
                <form action="<?= site_url('user/del') ?>" method="post">
                  <a href="<?= site_url('user/edit/' . $data->user_id) ?>" class="btn btn-xs btn-primary">
                    <i class="fa fa-pen"></i> Edit
                  </a>
                  <button href="<?= site_url('user/hapus') ?>" class="btn btn-xs btn-danger" onclick="return confirm('Apakah anda yakin?')">
                    <input type="hidden" name="user_id" value="<?= $data->user_id ?>">
                    <i class="fa fa-trash"></i> Hapus
                  </button>
              </td>
              </form>
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