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
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TÊN SẢN PHẨM</label>
                    <input type="text" name="ten_sanpham" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên sản phẩm">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">DUNG LƯỢNG</label>
                    <input type="text" name="dungLuong" class="form-control" id="exampleInputEmail1" placeholder="Nhập dung lượng">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">SỐ LƯỢNG</label>
                    <input type="text" name="soLuong" class="form-control" id="exampleInputEmail1" placeholder="Nhập số lượng">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TRẠNG THÁI</label>
                    <select name="trangThai" id="">
                      <option value="Còn hàng">Còn hàng</option>
                      <option value="Hết hàng">Hết hàng</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>MÀU SẮC:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="mauSac">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">HÌNH ẢNH:</label>
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1" placeholder="HÌNH ẢNH">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">LƯỢT XEM:</label>
                    <input type="text" name="luotXem" class="form-control" id="exampleInputEmail1" placeholder="LƯỢT XEM">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NGÀY NHẬP:</label>
                    <input type="date" name="ngay_nhap"  class="form-control datetimepicker-input" id="exampleInputEmail1" placeholder="NGÀY NHẬP">
                  </div><div class="form-group">
                    <label for="exampleInputEmail1">MÔ TẢ:</label>
                    <input type="text" name="moTa"  class="form-control datetimepicker-input" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                  
                    <select name="id_dm" id="">
                      
                      <?php
                      $listdm=load_all_dm();
                    foreach($listdm as $dm)
                      { extract($dm); ?>                            
                      <option value="<?= $id_dm  ?>"><?= $ten_dm ?></option>
                  <?php    } ?>
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