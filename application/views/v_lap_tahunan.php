<div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-shopping-cart"></i> <?= $title ?>
                    <small class="float-right">Tahun: <?= $tahun ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
               
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>No. </th>
                      <th>Nomor Order</th>
                      <th>Tanggal</th>
                      <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                     <?php $no = 1;
                     $grand_total = 0;
                     foreach ($laporan as $key => $value) { 
                        $grand_total = $grand_total + $value->grand_total;
                       ?>
                       <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value->no_order ?></td>
                        <td><?= $value->tgl_order ?></td>
                        <td>Rp. <?= number_format($value->grand_total , 0, ',','.') ?></td>
                       </tr>
                     <?php } ?>
                    </tbody>
                  </table>
                  <h3>Grand Total : Rp. <?= number_format($grand_total , 0, ',','.') ?></h3>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <button onclick="window.print()" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->