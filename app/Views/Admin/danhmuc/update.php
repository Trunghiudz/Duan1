<?php
if(is_array($dm)){
    extract($dm);
}

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Danh mục</h1>
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
                <h3 class="card-title">Thêm danh mục mới</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" action="index.php?act=updatedm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">MÃ</label>
                    <input type="text" name="id_dm" class="form-control" id="exampleInputEmail1" placeholder="Mã danh mục" value="<?= $id_dm  ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tên loại</label>
                    <input type="text" name="ten_dm" class="form-control" id="exampleInputPassword1" placeholder="Tên loại" value="<?= $ten_dm ?>">
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
    