<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tin tức</h1>
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
                <h3 class="card-title">Danh sách tin tức</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>MÃ</th>
                    <th>TIÊU ĐỀ</th>
                    <th>NỘI DUNG</th>
                    <th>NGÀY ĐĂNG</th>
                    <th>TRẠNG THÁI</th>
                    <th>THAO TÁC</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt=0;
                    foreach($listtintuc as $tintuc){
                    $stt++;
                    extract($tintuc);
                  
                    echo '<tr>
                    <td>'.$stt.'</td>
                    <td>'.$tieu_de.'</td>
                    <td>'.$noi_dung.'</td>
                    <td>'.$trangThai.'</td>
                    <td>'.$ngayDang.'</td>
                    <td>
                      <button type="button" class="btn btn-block btn-default">Sửa</button> <button type="button" class="btn btn-block btn-default">Xóa</button>
                    </td>
                  </tr>';
                  }
                  ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                      <th>MÃ</th>
                      <th>TIÊU ĐỀ</th>
                      <th>NỘI DUNG</th>
                      <th>NGÀY ĐĂNG</th>
                      <th>TRẠNG THÁI</th>
                      <th>THAO TÁC</th>
                    </tr>
                  </tfoot>
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
    