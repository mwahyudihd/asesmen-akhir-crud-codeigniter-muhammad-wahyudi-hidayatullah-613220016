<?php include'header.php' ?>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form - Tambah <small>Catatan</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="<?php echo site_url('C_data/add_note'); ?>">
                <div class="card-body">
                    <?php $id_user = $this->session->userdata('id'); ?>
                    <input type="number" value="<?php echo $id_user; ?>" name="id_pemilik" readonly hidden>
                  <div class="form-group">
                    <label for="note">Catatan :</label>
                    <textarea name="noted" id="" cols="30" rows="10" class="form-control" required></textarea>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="<?php echo site_url('C_index/notes'); ?>" class="btn btn-warning"><i class="fas fa-angle-left"></i> Kembali</a>
                  <button type="submit" class="float-right btn btn-primary">Add <i class="fas fa-file"></i></button>
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