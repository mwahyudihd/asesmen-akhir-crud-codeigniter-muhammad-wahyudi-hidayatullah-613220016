<?php include'header.php' ?>


<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form - Edit <small>Catatan</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="post" action="<?php echo site_url('C_data/set_update_note'); ?>">
                <div class="card-body">
                    <input type="number" value="<?php echo $data->id_catatan ?>" name="id_catatan" readonly hidden>
                  <div class="form-group">
                    <label for="note">Catatan :</label>
                    <textarea name="noted" id="" cols="30" rows="10" class="form-control" required><?php echo $data->catatan ?></textarea>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="<?php echo site_url('C_index/notes'); ?>" class="btn btn-warning"><i class="fas fa-angle-left"></i> Kembali</a>
                  <button type="submit" class="float-right btn btn-primary">Save <i class="m-1 fas fa-save"></i></button>
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