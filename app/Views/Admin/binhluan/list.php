<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Bình luận</h1>
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
                <h3 class="card-title">Danh sách bình luận</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>KHÁCH HÀNG</th>
                    <th>SẢN PHẨM</th>
                    <th>NỘI DUNG</th>
                    <th>NGÀY ĐÁNH GIÁ</th>
                    <th>TRẠNG THÁI</th>
                    <th>THAO TÁC</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($listbl as $bl) { 
                                  extract($bl);
                                ?>
                                <tr>
                                  <td><input type="checkbox" name="checkbox" id=""></td>
                                  <td><?= $id_binhluan    ?></td>
                                  <td><?= $id_user   ?></td>
                                  <td><?= $id_sanpham     ?></td>
                                  <td><?= $ngayBinhLuan   ?></td>
                                  <td><?= $trangThai  ?></td>
                                  <td>
                                      <a href="index.php?act=xoabl&id_binhluan=<?php echo $id_binhluan ?>"><input type="button" name="" value="Xoá" id=""></a>
                                  </td>
                                </tr>
                                <?php  } ?>
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
    