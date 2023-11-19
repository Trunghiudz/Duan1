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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách Banner</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>TÊN BANNER</th>
                    <th>ẢNH</th>
                    <th>LINK</th>
                    <th>TRẠNG THÁI</th>
                    <th>THAO TÁC</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt=0;
                    foreach($listbanner as $banner){ 
                      $stt++;
                    extract($banner);
                    $suabanner = "index.php?act=suabanner&id_banner=".$id_banner;
                    $xoabanner = "index.php?act=xoabanner&id_banner=".$id_banner;
                      
                    $img = "../../upload/".$img;
                    if(is_file($img)){
                        $img = "<img src='".$img."' height = '60px'>";
                    }else{
                        $img = "No Photo";
                    }
                    
                    echo '<tr>
                      <td>'.$stt.'</td>
                      <td>'.$ten.'</td>
                      <td>'.$img.'</td>
                      <td>'.$link.'</td>
                      <td>'.$trangThai.'</td>
                      <td>
                      <a href="'.$suabanner.'"><button type="button" class="btn btn-block btn-default">Sửa</button><a/>
                      <a href="'.$xoabanner.'"><button type="button" class="btn btn-block btn-default">Xóa</button><a/>
                      </td>
                    </tr>';
                  }
                  ?>
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->