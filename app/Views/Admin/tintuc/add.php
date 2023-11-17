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
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm tin tức</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  role="form" id="quickForm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TIÊU ĐỀ</label>
                    <input type="text" name="tieude" class="form-control" id="exampleInputEmail1" placeholder="Tiêu đề">
                  </div>
                  <div class="form-group">
                    <label>NỘI DUNG</label>
                    <textarea name="noidung" class="form-control" rows="3" placeholder="Nội dung ..."></textarea>
                  </div>
                  <div class="form-group">
                    <label>NGÀY ĐĂNG</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="ngaydang" class="form-control datetimepicker-input" data-target="#reservationdate" />
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker" >
                            <div class="input-group-text"><i class="fa fa-calendar" ></i></div>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TRẠNG THÁI</label>
                    <input type="text" name="trangThai" class="form-control" id="exampleInputEmail1" placeholder="Trạng thái">
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
    