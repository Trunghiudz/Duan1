<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Đơn hàng</h1>
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
                <h3 class="card-title">Danh sách đơn hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>HỌ TÊN</th>
                    <th>TRẠNG THÁI</th>
                    <th>SỐ ĐIỆN THOẠI</th>
                    <th>Email</th>
                    <th>ĐỊA CHỈ</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>TỔNG ĐƠN HÀNG</th>
                    <th>ID KHUYẾN MÃI</th>
                    <th>ID USER</th>
                    <th>THAO TÁC</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt=0;
                    foreach($listdonhang as $donhang){
                      $stt++;
                      extract($donhang);
                      $suadh = "index.php?act=suadh&id_donhang=".$id_donhang;
                      $xoadh = "index.php?act=xoadh&id_donhang=".$id_donhang;
                      echo '<tr>
                      <td>'.$stt.'</td>
                      <td>'.$hoTen.'</td>
                      <td>'.$trangThai.'</td>
                      <td>'.$soDienThoai.'</td>
                      <td>'.$email.'</td>
                      <td>'.$diaChi.'</td>
                      <td>'.$ngay_dathang.'</td>
                      <td>'.$tong_donhang.'</td>
                      <td>'.$id_user.'</td>
                      <td>'.$id_km.'</td>
                      <td>
                      <a href="'.$suadh.'"><button type="button" class="btn btn-block btn-default">Sửa</button><a/>
                      <a href="'.$xoadh.'"><button type="button" class="btn btn-block btn-default">Xóa</button><a/>
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
    