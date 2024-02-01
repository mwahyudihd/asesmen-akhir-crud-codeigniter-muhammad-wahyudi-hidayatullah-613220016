<?php include'header.php'; ?>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Table Hutang </h3>
                <a href="<?php echo site_url('C_index/new') ?>" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Pemberi</th>
                    <th>Jumlah</th>
                    <th>Status</th>
                    <th>Tanggal Berhutang</th>
                    <th>Tanggal Buat</th>
                    <th>Tanggal Lunas</th>
                    <th></th>
                  </tr>
                  </thead>
                  <?php 
                    $count = 0;
                    foreach ($queryAllHutang as $row) {
                        $count = $count + 1;
                    ?>
                  <tbody>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $row->nm_pemberi ?></td>
                      <td>Rp.<?php echo number_format($row->jumlah_htg, 2, ',', '.'); ?></td>
                      <td>
                          <span class="badge <?php if($row->status == 'lunas'){ echo 'bg-success'; } else{ echo 'bg-danger'; } ?>"><?php echo $row->status ?></span>
                      </td>
                      <td><?php echo $row->tg_hutang ?></td>
                      <td><?php echo $row->tgl_hutang ?></td>
                      <td><?php if($row->tgl_lunas != NULL) { 
                          echo $row->tgl_lunas; 
                      }else {
                          echo 'Hutang Anda Belum Lunas!';
                      } ?></td>
                      <td class="d-flex">
                          <a href="<?php echo site_url('C_data/dir_edit') ?>/<?php echo $row->id_hutang ?>" class="btn btn-warning"><i class="fas fa-pen"></i> Edit</a>
                            <?php if($row->status == 'belum') { ?>
                          <a href="<?php echo site_url('C_data/send_status') ?>/<?php echo $row->id_hutang ?>" class="float-center btn btn-primary" onclick="return confirm('Anda Yakin Hutang Anda lunas?')"><i class="fas fa-check"></i> Lunas</a>
                          <?php }else{ ?>
                            <button disabled="disabled" class="float-center btn btn-secondary"><i class="fas fa-check"></i> Lunas</button>
                          <?php } ?>
                          <a href="<?php echo site_url('C_data/remove') ?>/<?php echo $row->id_hutang ?>" class="float-right btn btn-danger" onclick="return confirm('Anda Yakin Ingin menghapus data?')"><i class="fas fa-trash"></i> Hapus</a>
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
