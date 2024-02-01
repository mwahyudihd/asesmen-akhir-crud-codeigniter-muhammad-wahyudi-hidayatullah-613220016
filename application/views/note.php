<?php include'header.php'; ?>
<div class="card card-row card-default">
          <div class="card-header bg-info">
            <h3 class="card-title">
              Notes
            </h3>
            <a href="<?php echo site_url('C_index/new_note') ?>" class="btn btn-dark float-right">ADD <i class="fas fa-plus"></i></a>
          </div>
          <div class="card-body d-flex">
            <!-- line -->
            <?php 
            foreach ($is_noted as $text) {
            ?>
            <div class="card card-light card-outline m-3">
              <div class="card-header">
                <h5 class="card-title"><?php echo $text->create_on ?></h5>
                <div class="card-tools">
                  <a href="<?php echo site_url('C_data/clear_noted') ?>/<?php echo $text->id_catatan ?>" onclick="return confirm('Anda yakin ingin menghapus catatan ini?')" class="btn btn-tool btn-link"><i class="fas fa-trash"></i></a>
                </div>
              </div>
              <div class="card-body">
                <p>
                  <?php echo $text->catatan ?>
                </p>
                <a href="<?php echo site_url('C_data/noted_data')?>/<?php echo $text->id_catatan ?>" class="btn btn-tool float-right">
                    <i class="fas fa-pen"></i>
                  </a>
              </div>
            </div>
            <?php } ?>
            <!-- /line -->
          </div>
        </div>

<?php include'footer.php'; ?>