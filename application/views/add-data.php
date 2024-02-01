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
              <form id="quickForm" method="post" action="<?php echo site_url('C_data/add_action'); ?>">
                <div class="card-body">
                    <?php $id_user = $this->session->userdata('id'); ?>
                    <input type="number" value="<?php echo $id_user; ?>" name="id_pemilik" readonly hidden>
                  <div class="form-group">
                    <label for="nm">Nama Pemberi <small>Hutang</small></label>
                    <input type="text" name="pemberi" class="form-control" id="exampleInputEmail1" placeholder="Nama Pemberi">
                  </div>
                  <div class="form-group">
                    <label for="jml">Jumlah <small>Hutang</small></label>
                    <input type="number" name="jml_hutang" class="form-control" id="" placeholder="Jumlah">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="float-right btn btn-primary">Add <i class="fas fa-file"></i></button>
                  <a type="<?php echo site_url('C_index/dashboard'); ?>" class="btn btn-warning"><i class="fas fa-angle-left"></i> Kembali</a>
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