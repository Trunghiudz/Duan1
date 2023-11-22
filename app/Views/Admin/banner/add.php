<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Banner</h1>
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
                <h3 class="card-title">Thêm danh banner</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TÊN BANNER</label>
                    <input type="text" name="banner" class="form-control" id="exampleInputEmail1" placeholder="Tên banner">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">ẢNH</label><br>
                    <input type="file" name="img"  id="exampleInputPassword1" placeholder="ảnh">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">LINK</label>
                    <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Link">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TRẠNG THÁI</label>
                    <select name="trangThai" id="">
                      <option value="Hoạt Động">Hoạt Động</option>
                      <option value="Ngừng Hoạt Động">Ngừng Hoạt Động</option>
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
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->