<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Khuyến mãi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách khuyến mãi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Mã KHUYẾN MÃI</th>
                    <th>Phần trăm khuyến mãi</th>
                    <th>TRẠNG THÁI</th>
                    <th>NGÀY ĐĂNG</th>
                    <th>NGÀY KẾT THÚC</th>
                    <th>THAO TÁC</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt=0;
                    foreach($listkhuyenmai as $khuyenmai){
                      $stt++;
                      extract($khuyenmai);
                      $suakm = "index.php?act=suakm&id_km=".$id_km;
                      $xoakm = "index.php?act=xoakm&id_km=".$id_km;
                      echo '<tr>
                      <td>'.$stt.'</td>
                      <td>'.$ma_km.'</td>
                      <td>'.$phantram_km.'</td>
                      <td>'.$trangThai.'</td>
                      <td>'.$ngay_bd.'</td>
                      <td>'.$ngay_kt.'</td>
                      <td>
                      <a href="'.$suakm.'"><button type="button" class="btn btn-block btn-default">Sửa</button><a/>
                      <a href="'.$xoakm.'"><button type="button" class="btn btn-block btn-default">Xóa</button><a/>
                      </td>
                    </tr>';
                    }
                  ?>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    