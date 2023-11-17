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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách danh mục</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>TÊN DANH MỤC</th>
                    <th>TRẠNG THÁI</th>
                    <th>MÔ TẢ</th>
                    <th>THAO TÁC</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt=0;
                    foreach($listdm as $dm){
                      $stt++;
                    extract($dm);
                  ?>
                    <tr>
                    <td><?= $id_dm  ?></td>
                    <td><?= $ten_dm ?></td>
                    <td><?= $moTa ?></td>
                    <td><?= $trangThai ?></td>
                    <td>
                      <a href="index.php?act=suadm&id_dm=<?= $id_dm  ?>">
                      <button type="button" class="btn btn-block btn-default">Sửa</button> 
                      </a>
                      <a href="index.php?act=xoadm&id_dm=<?= $id_dm  ?>">
                      <button type="button" class="btn btn-block btn-default">Xóa</button>
                      </a>
                    </td>
                  </tr>
                  <?php }
                  ?>
                  <!-- <tr>
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td></td>
                    <td></td>
                    <td>
                     
                      <a href="index.php?act=suadm"><button type="button" class="btn btn-block btn-default">Sửa</button></a>
                      <button type="button" class="btn btn-block btn-default">Xóa</button>
                    </td>
                  </tr> -->
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
    