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
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm user</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TÊN USER</label>
                    <input type="text" name="hoTen" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên user">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TÊN ĐĂNG NHẬP</label>
                    <input type="text" name="taiKhoan" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên đăng nhập">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">PASSWORD</label>
                    <input type="password" name="matKhau" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">EMAIL</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ĐỊA CHỈ</label>
                    <input type="text" name="diaChi" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">ĐIỆN THOẠI</label>
                    <input type="text" name="soDienThoai" class="form-control" id="exampleInputEmail1" placeholder="Nhập số điện thoại">
                  </div>
                  <div class="form-group">
                    <label>NGÀY SINH</label>
                    <div class="input-group date" id="reservationdate" >
                        <input type="date" class="form-control datetimepicker-input" name="ngay_sinh"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">VAI TRÒ</label>
                    <select class="form-control select2" style="width: 100%;" name="id_role">
                      <option value="0">1</option>
                      <option value="1">2</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TRẠNG THÁI</label>
                    <input type="text" name="trangThai" class="form-control" placeholder="Nhập trạng thái">
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="gui">Submit</button>
                </div>
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
    