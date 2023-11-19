<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liên hệ</h1>
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
                <h3 class="card-title">Danh sách liên hệ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>MÃ KHÁCH HÀNG</th>
                    <th>NỘI DUNG</th>
                    <th>TRẠNG THÁI</th>
                    <th>THAO TÁC</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt=0;
                    foreach($listlienhe as $lienhe){
                      $stt++;
                      extract($lienhe);
                      $sualh = "index.php?act=sualh&id_lienhe=".$id_lienhe;
                      $xoalh = "index.php?act=xoalh&id_lienhe=".$id_lienhe;
                      echo '<tr>
                      <td>'.$stt.'</td>
                      <td>'.$id_user.'</td>
                      <td>'.$noi_dung.'</td>
                      <td>'.$trangThai.'</td>
                      <td>
                      <a href="'.$sualh.'"><button type="button" class="btn btn-block btn-default">Sửa</button><a/>
                      <a href="'.$xoalh.'"><button type="button" class="btn btn-block btn-default">Xóa</button><a/>
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
    