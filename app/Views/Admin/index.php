<?php
  include("header.php");
  include("boxleft.php");
  include("home.php");
  include("../../Models/Admin/pdo.php");
  include("../../Models/Admin/tintuc.php");
  include("../../Models/Admin/danhmuc.php");
?>
<?php
  if (isset($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        case 'listdm':
            $listdm=load_all_dm();
            include "danhmuc/list.php";
            break;
        case 'adddm':
            if(isset($_POST['gui'])){
                $ten_dm = $_POST['ten_dm'];
                insert_danhmuc($ten_dm);
                $thongBao = " Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case "suadm":
            if(isset($_GET['id_dm']) && $_GET['id_dm'] > 0){
                    $id_dm = $_GET['id_dm'];
                    $dm = loadone_danhmuc($id_dm);
            }
            include "danhmuc/update.php";
            break;
        case "updatedm":
             if(isset($_POST['capnhat'])){
                    $id_dm = $_POST['id_dm'];
                    $ten_dm = $_POST['ten_dm'];
                    
                    update_danhmuc($id_dm,$ten_dm);
            }

            $listdm = load_all_dm();
            include "danhmuc/list.php";
            break;
        case "xoadm":
            if(isset($_GET['id_dm']) && $_GET['id_dm'] != ""){
                    $id_dm = $_GET['id_dm'];
                    delete_danhmuc($id_dm);
            }

            $listdm = load_all_dm();
            include "danhmuc/list.php";
            break;
        case 'listsp':
            include "sanpham/list.php";
            break;
        case 'addsp':
            include "sanpham/add.php";
            break;
        case 'listbl':
            include "binhluan/list.php";
            break;
        case 'addbl':
            include "binhluan/add.php";
            break;
        case 'listdh':
            include "donhang/list.php";
            break;
        case 'adddh':
            include "donhang/add.php";
            break;
        case 'listuser':
            include "user/list.php";
            break;
        case 'adduser':
            include "user/add.php";
            break;
        case 'listtt':
            $listtintuc=load_all_tintuc();
            include "tintuc/list.php";
            break;
        case 'addtt':
            if (isset($_POST['gui'])) {
                $tieude=$_POST['tieude'];
                $noidung=$_POST['noidung'];
                $trangthai=$_POST['trangThai'];
                $ngayDang=$_POST['ngaydang'];
                insert_tintuc($tieude,$noidung,$ngayDang,$trangthai);
                $thongBao = " Thêm thành công";
            }
            include "tintuc/add.php";
            break;
        case 'xoatt':
            if (isset($_GET['id_tintuc'])&&($_GET['id_tintuc'])>0) {
                delete_tintuc($_GET['id_tintuc']);
            }
            $listtintuc=load_all_tintuc();
            include "tintuc/list.php";
            break;
        case 'listlh':
            include "lienhe/list.php";
            break;
        case 'addlh':
            include "lienhe/add.php";
            break;
        case 'listkm':
            include "khuyenmai/list.php";
            break;
        case 'addkm':
            include "khuyenmai/add.php";
            break;
        case 'listbt':
            include "bienthe/list.php";
            break;
        case 'addbt':
            include "bienthe/add.php";
            break;
        case 'listbanner':
            include "banner/list.php";
            break;
        case 'addbanner':
            include "banner/add.php";
            break;
        default:
            
            break;
    }
 }else{
    
 }
?>

  
  

  
<?php
  include("footer.php");
?>
  