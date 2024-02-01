<?php include 'header.php' ?>
<?php date_default_timezone_set('Asia/Jakarta'); ?>
<link href="https://fonts.cdnfonts.com/css/alarm-clock" rel="stylesheet">

<!-- content -->
    <style>
    .spinner {
    width: 56px;
    height: 56px;
    display: grid;
    border: 4.5px solid #0000;
    border-radius: 50%;
    border-color: #dbdcef #0000;
    animation: spinner-e04l1k 1.4s infinite linear;
    }

    .spinner::before,
    .spinner::after {
    content: "";
    grid-area: 1/1;
    margin: 2.2px;
    border: inherit;
    border-radius: 50%;
    }

    .spinner::before {
    border-color: #ffffff #0000;
    animation: inherit;
    animation-duration: 0.7s;
    animation-direction: reverse;
    }

    .spinner::after {
    margin: 8.9px;
    }

    @keyframes spinner-e04l1k {
    100% {
        transform: rotate(1turn);
    }
    }
    </style>
              <!-- PIE CHART -->
              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Time</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <h2><?php echo $time_data; ?></h2>
                <div class="float-right spinner"></div>
                <div class="text-center border border-light" id="timeDate" style="font-size: 120px; font-family: 'alarm clock', sans-serif; margin-bottom: 50px;"></div>  
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

    <div class="card">
        <div class="card-header border-transparent">
            <h3 class="card-title">Data Hutang Anda</h3>

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
                            <th>Tanggal Hutang</th>
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
                            <td>Rp.<?php echo number_format($row->jumlah_htg, 2, ',', '.'); ?></td>
                            <td>
                                <span class="badge <?php if($row->status == 'lunas'){ echo 'bg-success'; } else{ echo 'bg-danger'; } ?>"><?php echo $row->status ?></span>
                            </td>
                            <td><?php echo $row->tg_hutang ?></td>
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

<script>
    var timeData = setInterval(isTimer, 1000);

    function isTimer() {
        var dateData = new Date();
        document.getElementById("timeDate").innerHTML = dateData.toLocaleTimeString();
    }
</script>
