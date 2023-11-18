<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Khuyến mãi</h1>
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
                <h3 class="card-title">Thêm khuyến mãi</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">MÃ KHUYẾN MÃI</label>
                    <input type="text" name="ma_km" class="form-control" id="exampleInputEmail1" placeholder="Mã khuyến mãi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">PHẦN TRĂM KHUYẾN MÃI</label>
                    <input type="text" name="phantram_km" class="form-control" id="exampleInputPassword1" placeholder="Phần trăm khuyến mãi">
                  </div>
                  <div class="form-group">
                    <label>NGÀY BẮT ĐẦU</label>
                    <div class="input-group date" id="reservationdate" >
                        <input type="date" class="form-control datetimepicker-input" name="ngay_bd"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>NGÀY KẾT THÚC</label>
                    <div class="input-group date" id="reservationdate">
                        <input type="date" class="form-control datetimepicker-input" name="ngay_kt"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">TRẠNG THÁI</label>
                    <input type="text" name="trangThai" class="form-control" id="exampleInputPassword1" placeholder="Trạng thái">
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
    