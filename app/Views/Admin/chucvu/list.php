<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Chức vụ</h1>
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
                <h3 class="card-title">Danh sách</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>CHỨC VỤ</th>
                    <th>TÊN CHỨC VỤ</th>
                    <th>TRẠNG THÁI</th>
                    <th>THAO TÁC</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt=0;
                    foreach($listchucvu as $chucvu){
                    $stt++;
                    extract($chucvu);
                    $suacv = "index.php?act=suacv&id_role=".$id_role;
                    $xoacv = "index.php?act=xoacv&id_role=".$id_role;
                    echo '<tr>
                    <td>'.$stt.'</td>
                    <td>'.$chuc_vu.'</td>
                    <td>'.$tenChucVu.'</td>
                    <td>'.$trangThai.'</td>
                    <td>
                      <a href="'.$suacv.'"><button type="button" class="btn btn-block btn-default">Sửa</button><a/>
                      <a href="'.$xoacv.'"><button type="button" class="btn btn-block btn-default">Xóa</button><a/>
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
    