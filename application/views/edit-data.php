<?php include'header.php' ?>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form - Tambah <small>Hutang</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="<?php echo site_url('C_data/set_edit'); ?>">
                <div class="card-body">
                    <input type="text" value="<?php echo $row_data->id_hutang ?>" name="id_selected" readonly hidden>
                  <div class="form-group">
                    <label for="nm">Nama Pemberi <small>Hutang</small></label>
                    <input type="text" name="pemberi" class="form-control" id="exampleInputEmail1" placeholder="Nama Pemberi" value="<?php echo $row_data->nm_pemberi ?>">
                  </div>
                  <div class="form-group">
                    <label for="jml">Jumlah <small>Hutang</small></label>
                    <input type="number" name="jml_hutang" class="form-control" id="" placeholder="Jumlah" value="<?php echo $row_data->jumlah_htg ?>">
                  </div>
                  <div class="form-group">
                    <label for="tgl">Tanggal <small>berhutang</small></label>
                    <input type="date" name="tg_hutang" class="form-control" id="" placeholder="Tanggal" value="<?php echo $row_data->tg_hutang ?>">
                  </div>
                  <?php if($row_data->tgl_lunas != NULL){ ?>
                    <div class="form-group">
                        <label for="tgl">Tanggal <small>Lunas</small></label>
                        <input type="date" name="tgl_lunas" class="form-control" id="" placeholder="Tanggal" value="<?php echo $row_data->tgl_lunas ?>">
                    </div>
                  <?php } ?>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="<?php echo site_url('C_index/data'); ?>" class="btn btn-warning"><i class="fas fa-angle-left"></i> Kembali</a>
                  <button type="submit" class="float-right btn btn-primary">Save <i class="fas fa-save m-1"></i></button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?php include'footer.php'; ?>