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
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm đơn hàng</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">HỌ TÊN</label>
                    <input type="text" name="hoTen" class="form-control" id="exampleInputEmail1" placeholder="Họ Tên">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TRẠNG THÁI</label>
                    <select name="trangThai" id="">
                      <option value="Hoạt Động">Hoạt Động</option>
                      <option value="Ngừng Hoạt Động">Ngừng Hoạt Động</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">SỐ ĐIỆN THOẠI</label>
                    <input type="text" name="soDienThoai" class="form-control" id="exampleInputEmail1" placeholder="Số điện thoại">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">EMAIL</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ĐỊA CHỈ</label>
                    <input type="text" name="diaChi" class="form-control" id="exampleInputEmail1" placeholder="Địa chỉ">
                  </div>
                  <div class="form-group">
                    <label>NGÀY ĐẶT HÀNG</label>
                    <div class="input-group date" id="reservationdate">
                        <input type="date" class="form-control datetimepicker-input" name="ngay_dathang"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TỔNG ĐƠN HÀNG</label>
                    <input type="text" name="tong_donhang" class="form-control" id="exampleInputEmail1" placeholder="TỔNG">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">USER</label>
                    <select class="form-control select2" style="width: 100%;" name="id_user">
                      <?php 
                        foreach ($listuser as $user){
                        extract($user);
                        echo '<option value="'.$id_user.'">'.$hoTen.'</option>';
                      }
                       ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">KHUYẾN MÃI</label>
                    <select class="form-control select2" style="width: 100%;" name="id_km">
                      <?php 
                        foreach ($listkhuyenmai as $khuyenmai){
                        extract($khuyenmai);
                        echo '<option value="'.$id_km.'">'.$phantram_km.'</option>';
                      }
                       ?>
                    </select>
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="gui">Submit</button>
                </div>
                <?php
                  if(isset($thongBao) && $thongBao != ""){
                      echo $thongBao;
                  }
                ?>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->