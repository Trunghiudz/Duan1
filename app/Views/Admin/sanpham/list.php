<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sản phẩm</h1>
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
                <h3 class="card-title">Danh sách sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>MÀU SẮC</th>
                    <th>DUNG LƯỢNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>ẢNH SẢN PHẨM</th>
                    <th>LƯỢT XEM</th>
                    <th>NGÀY NHẬP</th>
                    <th>MÔ TẢ</th>
                    <th>IDDM</th>
                    <th>TRẠNG THÁI</th>
                    <th>THAO TÁC</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <?php 
                      $stt=0;
                      foreach($listsp as $sp) {
                      $stt++;
                      extract($sp);
                      $hinhpart = "../../../public/upload/".$img;
                      if(is_file($hinhpart)){
                        $hinh = "<img src='".$hinhpart."' height = '60px'>";
                      }else{
                        $hinh = "No Photo";
                      }
                    ?>
                    
                    <td><?= $stt ?></td>
                    <td><?= $ten_sanpham ?></td>
                    <td><?= $mauSac ?></td>
                    <td><?= $dungLuong ?></td>
                    <td><?= $soLuong ?></td>
                    <td><?= $hinh ?></td>
                    <td><?= $luotXem ?></td>
                    <td><?= $ngay_nhap ?></td>
                    <td><?= $moTa	 ?></td>
                    <td><?= $id_dm  ?></td>
                    <td><?= $trangThai ?></td>
                    <td>
                      <a href="index.php?act=suasp&id_sanpham=<?= $id_sanpham ?>">
                        <button type="button" class="btn btn-block btn-default">Sửa</button> 
                      </a>
                      <a href="index.php?act=xoasp&id_sanpham=<?= $id_sanpham ?>">
                        <button type="button" class="btn btn-block btn-default">Xóa</button>
                      </a>
                    </td>
                  </tr>
                  <?php } ?>
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