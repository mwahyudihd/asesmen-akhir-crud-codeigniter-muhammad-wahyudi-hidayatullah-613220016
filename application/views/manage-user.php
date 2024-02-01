<?php include'header.php'; ?>
<?php if($this->session->userdata('id') != 2){
    redirect(site_url('C_index/dashboard'));
}
?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                        <a href="<?php echo site_url('C_index/user_manager') ?>"><i class="fas fa-times-circle"></i></a>
                        Berhasil menghapus Akun!
                    </div>
                <?php endif ?>
                <h3 class="card-title">Data Table Users </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th></th>
                  </tr>
                  </thead>
                  <?php 
                    $count = 0;
                    foreach ($queryAllUser as $row) {
                        $count = $count + 1;
                    ?>
                  <tbody>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row->username ?></td>
                      <td><?php echo $row->nama ?></td>
                      <td>
                        <?php echo $row->alamat ?>
                      </td>
                      <td class="d-flex">
                          <a href="<?php echo site_url('C_index/del_user') ?>/<?php echo $row->id ?>" class="float-right btn btn-danger" onclick="return confirm('Anda Yakin Ingin menghapus akun?')"><i class="fas fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  </tbody>
                  <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</section>

<?php include'footer.php'; ?>
