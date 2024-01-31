<?php include 'header.php' ?>

<!-- content -->
    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">Latest Orders</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table m-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pemberi</th>
                            <th>Jumlah</th>
                            <th>Status</th>
                            <th>Tanggal Buat</th>
                            <th>Tanggal Lunas</th>
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
                            <td><?php echo $row->jumlah_htg ?></td>
                            <td>
                                <span class="badge bg-success"><?php echo $row->status ?></span>
                            </td>
                            <td><?php echo $row->tgl_hutang ?></td>
                            <td><?php echo $row->tgl_lunas ?></td>
                        </tr>
                    </tbody>
                    <?php } ?>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->

    <?php include 'footer.php' ?>