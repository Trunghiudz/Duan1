<?php
  if(is_array($tintuc)){
    extract($tintuc);
  }
?>
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
                <h3 class="card-title">Sửa tin tức</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  role="form" id="quickForm" action="index.php?act=updatett" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="id_tintuc" value="<?php if (isset($id_tintuc)&&($id_tintuc>0)) echo $id_tintuc;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TIÊU ĐỀ</label>
                    <input type="text" name="tieude" class="form-control" id="exampleInputEmail1" placeholder="Tiêu đề" value="<?=$tieu_de?>">
                  </div>
                  <div class="form-group">
                    <label>NỘI DUNG</label>
                    <textarea name="noidung" class="form-control" rows="3" placeholder="Nội dung ..." value="<?=$noi_dung?>"></textarea>
                  </div>
                  <div class="form-group">
                    <label>NGÀY ĐĂNG</label>
                    <div class="input-group date" id="reservationdate">
                        <input type="date" name="ngaydang" class="form-control datetimepicker-input" value="<?=$ngayDang?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TRẠNG THÁI:</label><br>
                    <select name="trangThai" id="">
                      <?php
                        if ($trangThai=="Ngừng Hoạt Động") {
                          $s = "Selected";
                        }else{
                          $s="";
                        }
                      ?>
                      <option value="Hoạt Động">Hoạt Động</option>
                      <option value="Ngừng Hoạt Động" <?php echo $s?>>Ngừng Hoạt Động</option>
                      
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="capnhat">Submit</button>
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
    