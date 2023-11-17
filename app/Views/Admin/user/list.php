<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">User</h1>
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
                <h3 class="card-title">Danh sách user</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>TÊN USER</th>
                    <th>TÊN ĐĂNG NHẬP</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                    <th>TRẠNG THÁI</th>
                    <th>NGÀY SINH</th>
                    <th>THAO TÁC</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt=0;
                    foreach($listuser as $user){
                    $stt++;
                    extract($user);
                    $suauser = "index.php?act=suauser&id_user=".$id_user;
                    $xoauser = "index.php?act=xoauser&id_user=".$id_user;
                    echo '<tr>
                    <td>'.$stt.'</td>
                    <td>'.$hoTen.'</td>
                    <td>'.$taiKhoan.'</td>
                    <td>'.$matKhau.'</td>
                    <td>'.$email.'</td>
                    <td>'.$diaChi.'</td>
                    <td>'.$soDienThoai.'</td>
                    <td>'.$id_role.'</td>
                    <td>'.$trangThai.'</td>
                    <td>'.$ngay_sinh.'</td>
                    <td>
                      <a href="'.$suauser.'"><button type="button" class="btn btn-block btn-default">Sửa</button><a/>
                      <a href="'.$xoauser.'"><button type="button" class="btn btn-block btn-default">Xóa</button><a/>
                    </td>
                  </tr>';
                  }
                  ?>
                  <!-- <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                      <button type="button" class="btn btn-block btn-default">Sửa</button><button type="button" class="btn btn-block btn-default">Xóa</button>
                    </td>
                  </tr>
                  </tbody> -->
                  
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
    