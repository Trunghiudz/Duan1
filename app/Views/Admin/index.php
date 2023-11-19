<?php
  include("header.php");
  include("boxleft.php");
  include("home.php");
  include("../../Models/Admin/pdo.php");
  include("../../Models/Admin/tintuc.php");
  include("../../Models/Admin/danhmuc.php");
  include("../../Models/Admin/user.php");
  include("../../Models/Admin/khuyenmai.php");
  include("../../Models/Admin/lienhe.php");
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
            $listuser=load_all_user();
            include "user/list.php";
            break;
        case 'updateuser':
            include "user/list.php";
            break;
        case 'suauser':
            include "user/update.php";
            break;
        case 'xoauser':
            if (isset($_GET['id_user'])&&($_GET['id_user'])>0) {
                delete_user($_GET['id_user']);
            }
            $listuser=load_all_user();
            
            include "user/list.php";
            break;
        case 'adduser':
            if (isset($_POST['gui'])) {
                $hoTen=$_POST['hoTen'];
                $soDienThoai=$_POST['soDienThoai'];
                $diaChi=$_POST['diaChi'];
                $email=$_POST['email'];
                $taiKhoan=$_POST['taiKhoan'];
                $matKhau=$_POST['matKhau'];
                $ngay_sinh=$_POST['ngay_sinh'];
                $trangThai=$_POST['trangThai'];
                $id_role=$_POST['id_role'];
                insert_user($hoTen, $soDienThoai, $email, $diaChi, $taiKhoan, $matKhau,$ngay_sinh, $trangThai, $id_role);
                $thongBao = " Thêm thành công";
            }
            
            include "user/add.php";
            break;
        case 'listtt':
            $listtintuc=load_all_tintuc();
            include "tintuc/list.php";
            break;
        case "suatt":
            if(isset($_GET['id_tintuc']) && $_GET['id_tintuc'] > 0){
                $id_tintuc = $_GET['id_tintuc'];
                $tintuc = loadone_tintuc($id_tintuc);
            }
            include "tintuc/update.php";
            break;
        case "updatett":
            if(isset($_POST['capnhat'])){
                $id_tintuc = $_POST['id_tintuc'];
                $tieude = $_POST['tieude'];
                $noidung=$_POST['noidung'];
                $trangthai=$_POST['trangThai'];
                $ngayDang=$_POST['ngaydang'];        
                update_tintuc($id_tintuc,$tieude,$noidung,$trangthai,$ngayDang);
                $thongBao = " Cập nhập thành công";
            }
    
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
            $listlienhe=load_all_lienhe();
            include "lienhe/list.php";
            break;
        case 'sualh':
            include "lienhe/update.php";
            break;
        case 'xoalh':
            if (isset($_GET['id_lienhe'])&&($_GET['id_lienhe'])>0) {
                delete_lienhe($_GET['id_lienhe']);
            }
            $listlienhe=load_all_lienhe();
            include "lienhe/list.php";
            break;
        case 'addlh':
            if (isset($_POST['gui'])) {
                $noidung=$_POST['noidung'];
                $trangthai=$_POST['trangThai'];
                $id_user=$_POST['id_user'];
                insert_lienhe($noi_dung, $trangThai, $id_user);
                $thongBao = " Thêm thành công";
            }
            include "lienhe/add.php";
            break;
        case 'listkm':
            $listkhuyenmai=load_all_khuyenmai();
            include "khuyenmai/list.php";
            break;
        case 'suakm':
            if (isset($_GET['id_km'])) {
                $id_km = $_GET['id_km'];
                $pro_one =queryonekm($id_km);
            }
            include 'khuyenmai/update.php';
            break;
            break;  
        case 'xoakm':
            if (isset($_GET['id_km'])&&($_GET['id_km'])>0) {
                delete_khuyenmai($_GET['id_km']);
            }
            $listkhuyenmai=load_all_khuyenmai();
            include "khuyenmai/list.php";
            break;  
        case 'updatekm':
            if (isset($_POST['update'])) {
                $id_km=$_POST['id_km'];
                $ma_km = $_POST['ma_km'];
                $phantram_km = $_POST['phantram_km'];
                $trangThai	 = $_POST['trangThai'];
                $ngay_bd = $_POST['ngay_bd'];
                $ngay_kt = $_POST['ngay_kt'];
                updatekm($id_km,$ma_km,$phantram_km,$trangThai,$ngay_bd,$ngay_kt);
                $thongBao = " Cập nhập thành công";
            }

            $listkhuyenmai = load_all_khuyenmai();
            include 'khuyenmai/list.php';
        case 'addkm':
            if (isset($_POST['gui'])) {
                $ma_km=$_POST['ma_km'];
                $phantram_km=$_POST['phantram_km'];
                $trangThai=$_POST['trangThai'];
                $ngay_bd=$_POST['ngay_bd'];
                $ngay_kt=$_POST['ngay_kt'];
                insert_khuyenmai($ma_km,$phantram_km,$trangThai,$ngay_bd,$ngay_kt);
                $thongBao = " Thêm thành công";
            }
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
  