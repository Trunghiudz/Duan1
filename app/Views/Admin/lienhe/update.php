<?php
    if(is_array($lienhe)){
        extract($lienhe);
      }
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Liên hệ</h1>
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
                <h3 class="card-title">Thêm liên hệ</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post" action="index.php?act=updatelh">
                <div class="card-body">
                    <div class="form-group">
                    <input type="hidden" name="id_lienhe" value="<?php if (isset($id_lienhe)&&($id_lienhe>0)) echo $id_lienhe;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">MÃ KHÁCH HÀNG</label>
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
                    <label>NỘI DUNG</label>
                    <textarea class="form-control" rows="3" placeholder="Nội dung ..." name="noi_dung" ><?= $noi_dung ?></textarea>
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