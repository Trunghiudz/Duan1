<?php
if(is_array($banner)){
    extract($banner);
}

?>

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
                <h3 class="card-title">Thêm Banner mới</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="index.php?act=updatebanner" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên</label>
                    <input type="text" name="ten" class="form-control" id="exampleInputEmail1" placeholder="Tên banner" value="<?=$ten?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ảnh</label>
                    <input type="file" name="img" class="form-control" id="exampleInputPassword1" placeholder="Ảnh banner" value="<?= $img?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Đường Dẫn</label>
                    <input type="text" name="link" class="form-control" id="exampleInputEmail1" placeholder="Đường dẫn liên kết" value="<?= $link?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Trạng thái</label>
                    <input type="text" name="trangThai" class="form-control" id="exampleInputEmail1" placeholder="Trạng thái" value=<?=$trangThai?>>
                  </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="capnhat">CẬP NHẬT</button>
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